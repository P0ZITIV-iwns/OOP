<?php
// установка
// composer require --dev phpunit/phpunit
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Course;

class CourseTest extends TestCase
{
    public function testCourse()
    {
        $course1 = new Course('Mathematics');
        $this->assertEquals('Mathematics', $course1->getName());

        $course2 = new Course('Biology');
        $this->assertEquals('Biology', $course2->getName());

        $course3 = new Course('');
        $this->assertEquals('', $course3->getName());
    }

}
