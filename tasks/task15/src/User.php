<?php
namespace App;

use App\User\Address;

class User
{
    public $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function addAddress(User\Address $address): array
    {
        $this->addresses[] = $address;
    }
    public function getAddresses(): string
    {
        return $this->addresses;
    }
    public function getName(): string
    {
        return $this->name;
    }
}