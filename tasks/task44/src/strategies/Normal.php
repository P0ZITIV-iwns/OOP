<?php

namespace App\strategies;

class Normal
{
    public function makeMove(&$board, $player)
    {
        for ($row = 3; $row >= 1; $row--) {
            for ($col = 1; $col <= 3; $col++) {
                if ($board[$row][$col] === null) {
                    $board[$row][$col] = $player;
                    return;
                }
            }
        }
    }
}
