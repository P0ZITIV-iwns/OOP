<?php

namespace App\strategies;

class Easy
{
    public function makeMove(&$board, $player)
    {
        for ($row = 1; $row <= 3; $row++) {
            for ($col = 1; $col <= 3; $col++) {
                if ($board[$row][$col] === null) {
                    $board[$row][$col] = $player;
                    return;
                }
            }
        }
    }
}
