<?php

namespace app\models;

class Brand
{
    private string $name;
    private string $logo;

    public function __construct(string $name, string $logo = "")
    {
        $this->name = $name;
        $this->logo = $logo;
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
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }

}