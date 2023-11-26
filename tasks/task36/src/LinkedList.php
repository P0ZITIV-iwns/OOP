<?php

namespace App\LinkedList;

use App\Node;

function reverse(Node $list): Node
{
    $reversedList = null;
    while ($list) {
        $reversedList = new Node($list->getValue(), $reversedList);
        $list = $list->getNext();
    }
    return $reversedList;
}