<?php
function makeDecartPoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}
function getX($point)
{
    return $point['x'];
}
function getY($point)
{
    return $point['y'];
}

function makeSegment($beginPoint, $endPoint)
{
    return [
        'beginPoint' => $beginPoint,
        'endPoint' => $endPoint
    ];
}
function getMidpointOfSegment($segment)
{
    $beginPoint = getBeginPoint($segment);
    $endPoint = getEndPoint($segment);
    $midpoint = makeDecartPoint(
        (getX($beginPoint) + getX($endPoint)) / 2,
        (getY($beginPoint) + getY($endPoint)) / 2
    );
    return $midpoint;
}
function getBeginPoint($segment)
{
    return $segment['beginPoint'];
}
function getEndPoint($segment)
{
    return $segment['endPoint'];
}


$beginPoint = makeDecartPoint(3, 2);
$endPoint = makeDecartPoint(0, 0);
$segment = makeSegment($beginPoint, $endPoint);
print_r(getBeginPoint($segment)); // (3, 2)
print "<br>";

print_r(getEndPoint($segment)); // (0, 0)
print "<br>";

$segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));
print_r(getMidpointOfSegment($segment)); // (1.5, 1)
print "<br>";

$segment2 = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(2, 3));
print_r(getMidpointOfSegment($segment2)); // (2.5, 2.5)