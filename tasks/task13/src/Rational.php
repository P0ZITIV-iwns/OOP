<?php
namespace App;

class Rational
{
    public $numer;
    public $denom;
    public function __construct(int $numer, int $denom)
    {
        if ($denom < 0)
        {
            $numer = -$numer;
            $denom = -$denom;
        }
        $this->numer = $numer;
        $this->denom = $denom;
    }

    public function getNumer(): int 
    {
        return $this->numer;
    }

    public function getDenom(): int 
    {
        return $this->denom;
    }

    public function add(Rational $rat): Rational
    {
        $totalDenom = $this->denom * $rat->getDenom();
        $newNumer = $this->numer * $rat->getDenom() + $rat->getNumer() * $this->denom;
        return new Rational($newNumer, $totalDenom);
    }

    public function sub(Rational $rat): Rational
    {
        $totalDenom = $this->denom * $rat->getDenom();
        $newNumer = $this->numer * $rat->getDenom() - $rat->getNumer() * $this->denom;
        return new Rational($newNumer, $totalDenom);
    }
}