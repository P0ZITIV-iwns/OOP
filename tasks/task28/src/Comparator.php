<?php

namespace App\Comparator;

use Ds\Stack;

function compare(string $seq1, string $seq2): bool
{
    return getRealString($seq1) === getRealString($seq2);
}

function getRealString(string $sequence): string
{
    $stack = new Stack();

    for ($i = 0; $i < strlen($sequence); $i++) {
        if ($sequence[$i] !== '#') {
            $stack->push($sequence[$i]);
        } elseif (!$stack->isEmpty()) {
            $stack->pop();
        }
    }

    return implode('', $stack->toArray());
}