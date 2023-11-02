<?php
require_once 'Point.php';
require_once 'PointFunctions.php';

// Тесты
$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;
$midpoint1 = getMidpoint($point1, $point2);
print("Середина отрезка: (x = $midpoint1->x, y = $midpoint1->y)<br> при (x1 = $point1->x; y1 = $point1->y) и (x2 = $point2->x; y2 = $point2->y)");
print('<br>');

print('<br>');
$point3 = new Point();
$point3->x = -16;
$point3->y = -30;
$point4 = new Point();
$point4->x = -17;
$point4->y = -7;
$midpoint2 = getMidpoint($point3, $point4);
print("Середина отрезка: (x = $midpoint2->x, y = $midpoint2->y)<br> при (x1 = $point3->x; y1 = $point3->y) и (x2 = $point4->x; y2 = $point4->y)");
print('<br>');

print('<br>');
$point5 = new Point();
$point5->x = 20;
$point5->y = -10;
$point6 = new Point();
$point6->x = 50;
$point6->y = 6;
$midpoint3 = getMidpoint($point5, $point6);
print("Середина отрезка: (x = $midpoint3->x, y = $midpoint3->y)<br> при (x1 = $point5->x; y1 = $point5->y) и (x2 = $point6->x; y2 = $point6->y)");
print('<br>');

print('<br>');
$point7 = new Point();
$point7->x = 14;
$point7->y = 10;
$point8 = new Point();
$point8->x = -20;
$point8->y = 5;
$midpoint4 = getMidpoint($point7, $point8);
print("Середина отрезка: (x = $midpoint4->x, y = $midpoint4->y)<br> при (x1 = $point7->x; y1 = $point7->y) и (x2 = $point8->x; y2 = $point8->y)");
print('<br>');