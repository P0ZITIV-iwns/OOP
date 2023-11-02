<?php

namespace App;
require __DIR__ . "/vendor/autoload.php";
use App\Rational;

$rat1 = new Rational(3, 9);
print("1 число: числитель = {$rat1->getNumer()}; знаменатель = {$rat1->getDenom()}");
print "<br>";
$rat2 = new Rational(10, 3);
print("2 число: числитель = {$rat2->getNumer()}; знаменатель = {$rat2->getDenom()}");
print "<br>";
$rat3 = $rat1->add($rat2);
print("Результат сложения: числитель = {$rat3->getNumer()}; знаменатель = {$rat3->getDenom()}<br>");
$rat3 = $rat1->sub($rat2);
print("Результат вычитания: числитель = {$rat3->getNumer()}; знаменатель = {$rat3->getDenom()}");
print "<br><br>";

$rat4 = new Rational(-4, 16);
print("1 число: числитель = {$rat4->getNumer()}; знаменатель = {$rat4->getDenom()}");
print "<br>";
$rat5 = new Rational(12, 5);
print("2 число: числитель = {$rat5->getNumer()}; знаменатель = {$rat5->getDenom()}");
print "<br>";
$rat6 = $rat4->add($rat5);
print("Результат сложения: числитель = {$rat6->getNumer()}; знаменатель = {$rat6->getDenom()}<br>");
$rat6 = $rat4->sub($rat5);
print("Результат вычитания: числитель = {$rat6->getNumer()}; знаменатель = {$rat6->getDenom()}");
print "<br><br>";

$rat7 = new Rational(3, -9);
print("1 число: числитель = {$rat7->getNumer()}; знаменатель = {$rat7->getDenom()}");
print "<br>";
$rat8 = new Rational(2, 4);
print("2 число: числитель = {$rat8->getNumer()}; знаменатель = {$rat8->getDenom()}");
print "<br>";
$rat9 = $rat7->add($rat8);
print("Результат сложения: числитель = {$rat9->getNumer()}; знаменатель = {$rat9->getDenom()}<br>");
$rat9 = $rat7->sub($rat8);
print("Результат вычитания: числитель = {$rat9->getNumer()}; знаменатель = {$rat9->getDenom()}");
print "<br><br>";
