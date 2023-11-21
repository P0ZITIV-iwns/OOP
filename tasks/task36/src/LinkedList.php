<?php

namespace App\LinkedList;

use App\Node;

function reverse(Node $list): Node
{
    $prev = null;
    $current = $list;
    $next = null;

    while ($current !== null) {
        $next = $current->getNext();
        $current->next = $prev;
        $prev = $current;
        $current = $next;
    }

    return $prev;
}