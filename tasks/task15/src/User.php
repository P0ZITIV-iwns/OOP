<?php
namespace App;

class User
{
    public $name;
    public $addresses = [];
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function addAddress(User\Address $address): void
    {
        $this->addresses[] = $address;
    }
    public function getAddresses(): array
    {
        return $this->addresses;
    }
    public function getName(): string
    {
        return $this->name;
    }
}