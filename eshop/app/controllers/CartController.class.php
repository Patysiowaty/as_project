<?php

namespace app\controllers;

use app\models\Product;
use core\App;
use core\Validator;
use Exception;

class CartController
{
    private array $products;
    private array $cartQuantity;
    private int $totalPrice = 0;
    private int $userId;
    private int $numOfItems = 0;

    public function __construct()
    {
        $this->products = array();
        $this->cartQuantity = array();
        $this->userId = unserialize($_SESSION["_user_id"]);
        $this->loadCart();

        foreach ($this->products as $id => $item)
            $this->totalPrice += $item->getPrice() * $this->cartQuantity[$item->getId()];

        foreach ($this->cartQuantity as $id => $quantity)
            $this->numOfItems += $quantity;

    }

    /**
     * @throws \SmartyException
     */
    public function action_cart(): void
    {
        App::getSmarty()->assign("products", $this->products);
        App::getSmarty()->assign("price", $this->totalPrice);
        App::getSmarty()->assign("quantities", $this->cartQuantity);
        App::getSmarty()->assign("numOfItems", $this->numOfItems);
        App::getSmarty()->display("Cart.tpl");
    }

    public function action_addToCart(): void
    {
        $itemId = $this->getItemFromPost();

        if (!App::getMessages()->isEmpty())
            App::getRouter()->redirectTo("cart");

        $quantity = $this->getItemQuantity($itemId);

        if ($quantity < 0) {
            App::getDB()->insert("Cart", ["product_id" => $itemId, "customer_id" => $this->userId]);
        } else {
            App::getDB()->update("Cart", ["quantity[+]" => 1], ["customer_id" => $this->userId, "product_id" => $itemId]);
        }

        App::getRouter()->redirectTo("cart");
    }

    public function action_removeFromCart(): void
    {
        $itemId = $this->getItemFromPost();

        if (!App::getMessages()->isEmpty())
            App::getRouter()->redirectTo("cart");

        $quantity = $this->getItemQuantity($itemId);

        if ($quantity < 0)
            App::getRouter()->redirectTo("cart");

        if ($quantity > 1)
            App::getDB()->update("Cart", ["quantity[-]" => 1], ["product_id" => $itemId, "customer_id" => $this->userId]);
        else
            App::getDB()->delete("Cart", ["customer_id" => $this->userId, "product_id" => $itemId]);

        App::getRouter()->redirectTo("cart");
    }

    public function action_forceRemoveFromCart(): void
    {
        $itemId = $this->getItemFromPost();
        if (!App::getMessages()->isEmpty())
            App::getRouter()->redirectTo("cart");

        $quantity = $this->getItemQuantity($itemId);

        if ($quantity < 0)
            App::getRouter()->redirectTo("cart");

        App::getDB()->delete("Cart", ["customer_id" => $this->userId, "product_id" => $itemId]);

        App::getRouter()->redirectTo("cart");
    }

    public function action_doCheckout(): void
    {
        if (empty($this->products))
            App::getRouter()->redirectTo("cart");

        foreach ($this->products as $id => $product) {
            App::getDB()->insert("Order", ["customer_id" => $this->userId, "status" => "paid",
                "payment_method" => "card", "product_id" => $id, "quantity" => $this->cartQuantity[$id]
            ]);

            App::getDB()->delete("Cart", ["customer_id" => $this->userId, "product_id" => $id]);
        }
        App::getRouter()->redirectTo("cart");
    }

    private function loadCart(): void
    {
        $result = App::getDB()->select("Cart", [
            "[><]Product" => ["product_id" => "id"],
            "[><]Category" => ["Product.category_id" => "id"],
            "[><]Gender" => ["Product.gender_id" => "id"],
            "[><]Brand" => ["Product.brand_id" => "id"]
        ], [
            "Product.id", "Product.name", "Product.price", "Product.icon", "Category.name (category_name)",
            "Gender.name (gender_name)", "Brand.name (brand_name)", "quantity"
        ], [
            "customer_id" => $this->userId
        ]);

        foreach ($result as $item) {
            try {
                $product = Product::Parse($item);
                $this->products[$product->getId()] = $product;
                $this->cartQuantity[$product->getId()] = $item["quantity"];
            } catch (Exception $e) {
                continue;
            }
        }
    }

    private function getItemFromPost(): int
    {
        $validator = new Validator();
        return $validator->validateFromPost("id", ["required" => true, "int" => true]);
    }

    private function getItemQuantity(int $itemId): int
    {
        $result = App::getDB()->select("Cart", ["quantity"], ["customer_id" => $this->userId, "product_id" => $itemId]);

        if (empty($result))
            return -1;

        return intval($result[0]["quantity"]);
    }
}