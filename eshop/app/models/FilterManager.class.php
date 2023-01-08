<?php

namespace app\models;

use core\App;
use core\Utils;
use Exception;

class FilterManager
{
    private array $categories;
    private array $genders;
    private array $brands;

    public function __construct()
    {
        $this->categories = array();
        $this->genders = array();
        $this->brands = array();
    }

    public function loadData(): void
    {
        $this->loadGenders();
        $this->loadCategories();
        $this->loadBrands();
    }

    public function activateFilter(string $filterType, string $filterName): void
    {
        if ($filterType == "category") {
            $this->deactivateFilters($this->categories);
            $this->categories[$filterName] = true;
        } else if ($filterType == "gender") {
            $this->deactivateFilters($this->genders);
            $this->genders[$filterName] = true;
        } else if ($filterType == "brand") {
            $this->deactivateFilters($this->brands);
            $this->brands[$filterName] = true;
        } else {
            Utils::addErrorMessage("Unknown filter type!");
        }
    }

    public function deactivateFilters(array &$filtersType): void
    {
        foreach ($filtersType as $filter => $isActive) {
            $isActive = false;
        }
    }

    private function loadCategories(): void
    {
        $result = App::getDB()->select("Category", ["name"]);
        foreach ($result as $item) {
            try {
                $category = $item["name"] ?? throw new Exception("No category name provided!");
                $this->categories[$category] = false;
            } catch (Exception $e) {
                echo $e->getMessage();
                continue;
            }
        }
    }

    private function loadGenders(): void
    {
        $result = App::getDB()->select("Gender", ["name"]);
        foreach ($result as $item) {
            try {
                $gender = $item["name"] ?? throw new Exception("No gender name provided!");;
                $this->genders[$gender] = false;
            } catch (Exception $e) {
                echo $e->getMessage();
                continue;
            }
        }
    }

    private function loadBrands(): void
    {
        $result = App::getDB()->select("Brand", ["name"]);
        foreach ($result as $item) {
            try {
                $brand = $item["name"] ?? throw new Exception("No brand name provided!");;
                $this->brands[$brand] = false;
            } catch (Exception $e) {
                echo $e->getMessage();
                continue;
            }
        }
    }

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @return array
     */
    public function getGenders(): array
    {
        return $this->genders;
    }

    /**
     * @return array
     */
    public function getBrands(): array
    {
        return $this->brands;
    }
}