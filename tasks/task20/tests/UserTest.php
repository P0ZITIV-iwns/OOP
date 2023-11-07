<?php
// установка
// composer require --dev phpunit/phpunit
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace App\Tests;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function test()
    {
        $user1 = new User(4, 'tolya');
        $user2 = new User(1, 'petya');

        $this->assertFalse($user1->compareTo($user2));

        $user3 = new User(4, 'petya');

        $this->assertTrue($user1->compareTo($user3));
    }
}
