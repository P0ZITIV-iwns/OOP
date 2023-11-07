<?php

namespace App\PointFunctions;
use App\Point;

function getMidpoint(Point $point1, Point $point2): Point
{
    $midpoint = new Point();
    $midpoint->x = ($point1->x + $point2->x) / 2;
    $midpoint->y = ($point1->y + $point2->y) / 2;
    return $midpoint;
}

function dup(Point $point): Point
{
    $newPoint = new Point();
    $newPoint->x = $point->x;
    $newPoint->y = $point->y;
    return $newPoint;
}