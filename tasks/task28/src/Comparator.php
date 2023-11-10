<?php

namespace App\Comparator;

use Ds\Stack;

function compare($seq1, $seq2)
{
    return getRealString($seq1) === getRealString($seq2);
}

function getRealString($sequence)
{
    $stack = new Stack();

    for ($i = 0; $i < strlen($sequence); $i++) {
        if ($sequence[$i] === '#') {
            if (!$stack->isEmpty()) {
                $stack->pop();
            }
        } else {
            $stack->push($sequence[$i]);
        }
    }

    return implode('', iterator_to_array($stack));
}