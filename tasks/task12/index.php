<?php

namespace App;
require __DIR__ . "/vendor/autoload.php";
use function App\SegmentFunctions\reverse;
use App\Point;
use App\Segment;

$segment = new Segment(new Point(1, 10), new Point(11, -3));
print("Исходный отрезок:");
print("<br>Начальная точка: х = {$segment->beginPoint->x}, y = {$segment->beginPoint->y}");
print("<br>Конечная точка: х = {$segment->endPoint->x}, y = {$segment->endPoint->y}<br>");

$reversedSegment = reverse($segment);
print("<br>Перевёрнутый отрезок:");
print("<br>Начальная точка: х = {$reversedSegment->beginPoint->x}, y = {$reversedSegment->beginPoint->y}");
print("<br>Конечная точка: х = {$reversedSegment->endPoint->x}, y = {$reversedSegment->endPoint->y}");