<?php

namespace App;
require __DIR__ . "/vendor/autoload.php";


$user = new User('Ivan');
$address = new Address('Russia', 'Moscow', 'Lenina');
$user->addAddress($address);
 
$user2 = new User('Mila');
$user2->addAddress($address);
 
// Изменение происходит сразу у обоих пользователей
// Такое поведение неожиданно и ломает систему
$address->setCountry('USA');

// Получаем и выводим адреса пользователя
foreach ($user->getAddresses() as $address) {
    echo "User: " . $user->getName() . ", Address: " . $address->getCountry() . ", " . $address->getCity() . ", " . $address->getStreet() . "\n";
}

// Получаем и выводим адреса пользователя 2
foreach ($user2->getAddresses() as $address) {
    echo "User: " . $user2->getName() . ", Address: " . $address->getCountry() . ", " . $address->getCity() . ", " . $address->getStreet() . "\n";
}