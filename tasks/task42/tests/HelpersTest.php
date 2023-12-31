<?php
// установка
// composer require --dev phpunit/phpunit
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Helpers\getGreeting;

class HelpersTest extends TestCase
{
    public function testGetGreeting()
    {
        $guest = new \App\Guest();
        $this->assertEquals('Nice to meet you Guest!', getGreeting($guest));

        $user1 = new \App\User('Petr');
        $this->assertEquals('Hello Petr!', getGreeting($user1));

        $user2 = new \App\User('Mark');
        $this->assertEquals('Hello Mark!', getGreeting($user2));

        $user3 = new \App\User('Guest');
        $this->assertEquals('Hello Guest!', getGreeting($user3));
    }
}
