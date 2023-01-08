<?php

namespace app\models;

class User
{
    private int $id;
    private string $email;
    private string $street;
    private string $postalCode;
    private string $city;
    private array $roles;
    private bool $isActive;

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
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

    public function addRole(string $role): void
    {
        $this->roles[$role] = true;
    }

    public function removeRole(string $role): void
    {
        unset($this->roles[$role]);
    }

    public function isAdmin(): bool
    {
        return isset($this->roles["Admin"]);
    }

    public function isEmployee(): bool
    {
        return isset($this->roles["Employee"]);
    }

    public function isCustomer(): bool
    {
        return isset($this->roles["Customer"]);
    }

    public function isInRole(string $role): bool
    {
        return isset($this->roles[$role]);
    }

}