<?php

namespace App;

use Illuminate\Support\Collection;

class DeckOfCards
{
    private $cards;

    public function __construct(array $cards)
    {
        $this->cards = $cards;
    }

    public function getShuffled(): array
    {
        // Создаем колоду карт, где каждая карта встречается 4 раза
        $fullDeck = collect($this->cards)
            ->flatMap(function ($card) {
                return [$card, $card, $card, $card];
            })
            ->shuffle()
            ->all();
        return $fullDeck;
    }
}
