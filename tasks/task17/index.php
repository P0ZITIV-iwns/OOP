<?php

namespace App;
require __DIR__ . "/vendor/autoload.php";

$timer1 = new Timer(10);
print($timer1->getLeftSeconds()); // 10
print "<br>";

$timer1->tick();
print($timer1->getLeftSeconds()); // 9
print "<br>";

$timer2 = new Timer(8, 20, 8);
print($timer2->getLeftSeconds()); // 30008