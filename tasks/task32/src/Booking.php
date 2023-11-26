<?php

namespace App;

class Booking
{
    private array $books = [];

    public function book(string $dateFrom, string $dateTo): bool
    {
        $dateFrom = strtotime($dateFrom);
        $dateTo = strtotime($dateTo);
        if ($dateTo <= $dateFrom) {
            return false; // Проверка на корректные даты: выезд должен быть после заезда
        }
        foreach ($this->books as $book) {
            // Проверка на пересечение забронированных дат
            if ($dateTo > $book['dateFrom'] && $dateFrom < $book['dateTo']) {
                return false; // Есть пересечение дат - бронирование невозможно
            }
        }
        // Бронирование возможно, добавляем новую забронированную дату
        $this->books[] = [
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo
        ];
        return true;
    }
}
