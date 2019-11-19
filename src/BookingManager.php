<?php declare(strict_types = 1);


namespace Nfq\Academy;


class BookingManager
{
    public static function bookRoom ($room, $reservation) {
        echo( 'Room <strong>'.$room->getNumber().'</strong> successfully booked for <strong>'.$reservation->getGuest().
            '</strong> from <time>'.$reservation->getStartDate().'</time> to <time>'.$reservation->getEndDate().'</time>!');

    }
}