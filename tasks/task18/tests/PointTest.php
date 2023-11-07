<?php
// установка
// composer require --dev phpunit/phpunit
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace App\Tests;

use App\Point;
use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{
    public function testTableValue()
    {
        $this->assertEquals('points', Point::$table);
    }
}
