<?php
// установка
// composer require --dev phpunit/phpunit
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace App\Tests;

use App\Figure;
use App\Circle;
use App\Square;
use PHPUnit\Framework\TestCase;

class FigureTest extends TestCase
{
    public function setUp(): void
    {
        Circle\init();
        Square\init();
    }

    public function testGetArea()
    {
        $circle = Circle\make(5);
        $square = Square\make(5);
        $circleArea = Figure\getArea($circle);
        $this->assertEquals(79, round($circleArea));
        $squareArea = Figure\getArea($square);
        $this->assertEquals(25, $squareArea);
    }
}
