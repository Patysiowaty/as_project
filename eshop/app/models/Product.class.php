<?php

namespace app\models;

use Exception;

class Product
{
    private int $id = 0;
    private int $price = 0;
    private string $name = "";
    private string $category = "";
    private string $thumbnail = "";
    private string $gender = "";
    private string $brand = "";

    /**
     * @throws Exception
     */
    public static function Parse(array $data): Product
    {
        if (count($data) == 0) {
            throw new Exception();
        }

        $product = new Product();
        $product->setId(intval($data["id"]));
        $product->setName($data["name"] ?? throw new Exception("No product name provided!"));
        $product->setPrice(intval($data["price"]));
        $product->setThumbnail($data["icon"] ?? throw new Exception("No product icon provided!"));
        $product->setCategory($data["category_name"] ?? throw new Exception("No category name provided!"));
        $product->setGender($data["gender_name"] ?? throw new Exception("No gender type provided!"));
        $product->setBrand($data["brand_name"] ?? throw new Exception("No brand name provided!"));

        return $product;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     */
    public function setThumbnail(string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
}