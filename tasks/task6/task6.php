<?php
/* Функция gcd находит наибольший общий делитель двух чисел */
function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : abs($b);
}
/* Функция RatToString возвращает строковое представление числа (используется для отладки) */
function ratToString($rat)
{
    return getNumer($rat) . '/' . getDenom($rat);
}


function makeRational($numer, $denom)
{
    $gcd = gcd($numer, $denom);
    if ($denom < 0)
    {
        $numer = -$numer;
        $denom = -$denom;
    }
    return [
        'numer'=> $numer / $gcd,
        'denom'=> $denom / $gcd,
    ];
}
function getNumer($rational)
{
    return $rational['numer'];
}
function getDenom($rational)
{
    return $rational['denom'];
}
function add($rat1, $rat2)
{
    $numer1 = getNumer($rat1);
    $denom1 = getDenom($rat1);
    $numer2 = getNumer($rat2);
    $denom2 = getDenom($rat2);
    $totalDenom = $denom1 * $denom2;
    $newNumer = $numer1 * $denom2 + $numer2 * $denom1;
    return makeRational($newNumer, $totalDenom);
}
function sub($rat1, $rat2)
{
    $numer1 = getNumer($rat1);
    $denom1 = getDenom($rat1);
    $numer2 = getNumer($rat2);
    $denom2 = getDenom($rat2);
    $totalDenom = $denom1 * $denom2;
    $newNumer = $numer1 * $denom2 - $numer2 * $denom1;
    return makeRational($newNumer, $totalDenom);
}

$rat1 = makeRational(3, 9);
print ratToString($rat1)."<br>";
$rat2 = makeRational(10, 3);
print ratToString(add($rat1, $rat2))."<br>";
print ratToString(sub($rat1, $rat2))."<br>";
$rat3 = makeRational(-4, 16);
print ratToString($rat3)."<br>";
$rat4 = makeRational(12, 5);
print ratToString(add($rat3, $rat4))."<br>";
print ratToString(sub($rat3, $rat4))."<br>";
$rat5 = makeRational(3, -9);
print ratToString($rat5)."<br>";