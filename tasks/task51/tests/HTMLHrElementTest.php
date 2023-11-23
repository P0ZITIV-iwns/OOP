<?php
// установка
// composer require --dev phpunit/phpunit
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace App\Tests;

use App\HTMLHrElement;
use PHPUnit\Framework\TestCase;

class HTMLHrElementTest extends TestCase
{
    public function test()
    {
        $hr = new HTMLHrElement();
        $expected = '<hr>';
        $this->assertEquals($expected, $hr->__toString());

        $hr = new HTMLHrElement(['class' => 'w-75', 'id' => 'wop']);
        $expected = '<hr class="w-75" id="wop">';
        $this->assertEquals($expected, $hr->__toString());
    }
}
