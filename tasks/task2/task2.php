<?php
function getMidpoint($p1, $p2)
{
    return [
        'x' => ($p1['x'] + $p2['x']) / 2,
        'y' => ($p1['y'] + $p2['y']) / 2
    ];
}

$point1 = ['x' => 0, 'y' => 0];
$point2 = ['x' => 4, 'y' => 4];
$point3 = getMidpoint($point1, $point2);
print_r($point3); // => [ 'x' => 2, 'y' => 2 ]
print "<br>";
$point1 = ['x' => -1, 'y' => 10];
$point2 = ['x' => 0, 'y' => -3];
$point3 = getMidpoint($point1, $point2);
print_r($point3); // => [ 'x' => -0.5, 'y' => 3.5 ]


