<?php
namespace App\User;

class Address
{
    public $country;
    public $city;
    public $street;
    public function __construct(string $country, string $city, string $street)
    {
        $this->country = $country;
        $this->city = $city;
        $this->street = $street;
    }
    public function getCountry(): string
    {
        return $this->country;
    }
    public function getCity(): string
    {
        return $this->city;
    }
    public function getStreet(): string
    {
        return $this->street;
    }
    public function setCountry(string $country)
    {
        $this->country = $country;
    }
    public function setCity(string $city)
    {
        $this->city = $city;
    }
    public function setStreet(string $street)
    {
        $this->street = $street;
    }
}