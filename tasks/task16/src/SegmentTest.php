<?php
// установка
// composer require --dev phpunit/phpunit ^10
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace App\Tests;

use App\Point;
use App\Segment;
use PHPUnit\Framework\TestCase;

class SegmentTest extends TestCase
{
    public function testReverse()
    {
        $point1 = new Point(1, 10);
        $point2 = new Point(11, -3);
        $segment1 = new Segment($point1, $point2);
        $this->assertEquals('[(1, 10), (11, -3)]', "{$segment1}");

        $segment2 = new Segment($point2, $point1);
        $this->assertEquals('[(11, -3), (1, 10)]', "{$segment2}");
    }
}
