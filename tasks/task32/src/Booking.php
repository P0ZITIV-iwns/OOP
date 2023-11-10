<?php

namespace App;

class Booking
{
    private $bookedDates = [];

    public function book($checkInDate, $checkOutDate)
    {
        $checkIn = strtotime($checkInDate);
        $checkOut = strtotime($checkOutDate);

        if ($checkOut <= $checkIn) {
            return false; // Проверка на корректные даты: выезд должен быть после заезда
        }

        foreach ($this->bookedDates as $booked) {
            [$bookedCheckIn, $bookedCheckOut] = $booked;

            // Проверка на пересечение забронированных дат
            if (!($checkOut <= $bookedCheckIn || $checkIn >= $bookedCheckOut)) {
                return false; // Есть пересечение дат - бронирование невозможно
            }
        }

        // Бронирование возможно, добавляем новую забронированную дату
        $this->bookedDates[] = [$checkIn, $checkOut];
        return true;
    }
}
