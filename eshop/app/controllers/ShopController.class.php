<?php

namespace app\controllers;

use app\models\Brand;
use app\models\User;
use core\App;
use core\RoleUtils;
use core\Utils;
use core\Validator;
use Exception;
use SmartyException;
use app\models\Product;
use app\models\FilterManager;

class ShopController
{
    private array $products;

    private FilterManager $filterManager;

    public function __construct()
    {
        $this->products = array();
        $this->filterManager = new FilterManager();
        $this->filterManager->loadData();
        $this->loadProducts();
    }

    /**
     * @throws SmartyException
     */
    public function action_shop(): void
    {
        App::getSmarty()->assign("products", $this->products);
        App::getSmarty()->assign("brands", $this->filterManager->getBrands());
        App::getSmarty()->assign("categories", $this->filterManager->getCategories());
        App::getSmarty()->assign("genders", $this->filterManager->getGenders());
        App::getSmarty()->display("Shop.tpl");
    }

    public function action_addToCart(): void
    {
        $validator = new Validator();
        $productId = $validator->validateFromRequest("id", [
            'required' => true,
            'required_message' => 'Nie podano przedmiotu!',
            'int' => true
        ]);
        App::getRouter()->redirectTo("shop");
    }

    public function action_setFilter(): void
    {
        $validator = new Validator();
        $filterType = $validator->validateFromRequest("type", [
            'required' => true,
            'required_message' => 'Nie podano typu filtra!'
        ]);
        $filterName = $validator->validateFromRequest("name", [
            'required' => true,
            'required_message' => 'Nie podano nazwy filtra!'
        ]);

        $this->filterManager->activateFilter($filterType, $filterType);
        App::getRouter()->redirectTo("shop");
    }

    public function action_addBrand(): void
    {
        RoleUtils::requireRole("Employee");
        $validator = new Validator();
        $brandName = $validator->validateFromPost("name", ["required" => true, "trim" => true, "required_message" => "Musisz podac nazwe marki!"]);
        $uploadedFile = $this->handleUploadFile();

        if (!App::getMessages()->isEmpty())
            App::getRouter()->forwardTo("shop");

        $brand = App::getDB()->select("Brand", ["id"], ["name" => $brandName]);
        if (!empty($brand)) {
            Utils::addErrorMessage("Taka marka juz istnieje");
            App::getRouter()->redirectTo("shop");
        }

        App::getDB()->insert("Brand", ["name" => $brandName, "logo" => "img/" . $uploadedFile]);

        App::getRouter()->redirectTo('shop');
    }

    public function action_addProduct(): void
    {
        RoleUtils::requireRole("Employee");

        $validator = new Validator();
        $name = $validator->validateFromPost("name", ["required" => true, "trim" => true, "required_message" => "Musisz podac nazwe produktu!"]);
        $price = $validator->validateFromPost("price", ["required" => true, "int" => true, "min" => 1,
            "max" => 10000, "required_message" => "Wartosc powinna byc z zakresu 1 - 10 000"]);
        $category = $validator->validateFromPost("category", ["required" => true, "trim" => true, "required_message" => "Musisz wybrac kategorie!"]);
        $brand = $validator->validateFromPost("brand", ["required" => true, "trim" => true, "required_message" => "Musisz wybrac marke!"]);
        $gender = $validator->validateFromPost("gender", ["required" => true, "trim" => true, "required_message" => "Musisz wybrac plec!"]);

        $file = $this->handleUploadFile();

        if (!App::getMessages()->isEmpty())
            App::getRouter()->forwardTo("shop");

        $catId = App::getDB()->select("Category", ["id"], ["name" => $category]);
        $brandId = App::getDB()->select("Brand", ["id"], ["name" => $brand]);
        $genderId = App::getDB()->select("Gender", ["id"], ["name" => $gender]);


        if (empty($catId) || empty($brandId) || empty($genderId))
            return;

        $catId = intval($catId[0]["id"]);
        $brandId = intval($brandId[0]["id"]);
        $genderId = intval($genderId[0]["id"]);

        App::getDB()->insert("Product", ["name" => $name, "price" => $price, "icon" => "img/" . $file,
            "category_id" => $catId, "gender_id" => $genderId, "brand_id" => $brandId]);

        App::getRouter()->redirectTo("shop");
    }

    private function loadProducts(): void
    {
        $result = App::getDB()->select("Product", [
            "[><]Category" => ["Product.category_id" => "id"],
            "[><]Gender" => ["Product.gender_id" => "id"],
            "[><]Brand" => ["Product.brand_id" => "id"]
        ], [
            "Product.id", "Product.name", "Product.price", "Product.icon", "Category.name (category_name)",
            "Gender.name (gender_name)", "Brand.name (brand_name)"
        ]);

        foreach ($result as $item) {
            try {
                $this->products[] = Product::Parse($item);
            } catch (Exception $e) {
                echo $e->getMessage();
                continue;
            }
        }
    }

    private function handleUploadFile(): string
    {
        $image = $_FILES["icon"];
        if (!isset($image)) {
            Utils::addErrorMessage("Nie wskazano zadnego pliku!");
        }
        $imageName = $image["tmp_name"];

        $splitted = explode(".", $image["name"]);
        $ext = $splitted[count($splitted) - 1];

        $newName = hash("sha256", $imageName);
        $newName = $newName . "." . $ext;
        move_uploaded_file($imageName, App::getConf()->root_path . "/public/img/" . $newName);
        return $newName;
    }

}