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
        $fullDeck = collect($this->cards)
            ->map(function ($card) {
                return [$card, $card, $card, $card];
            })
            ->flatten()
            ->shuffle()
            ->all();
        return $fullDeck;
    }
}
