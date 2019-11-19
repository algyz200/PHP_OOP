<?php declare(strict_types = 1);


namespace Nfq\Academy;

interface ReservableInterface
{
    public function addReservation ($reservation);
    public function removeReservation ($reservation);
}