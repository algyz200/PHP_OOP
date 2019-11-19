<?php declare(strict_types = 1);

namespace Nfq\Academy;

class Room
{
    private $beds;
    private $type;
    private $restroom;
    private $balcony;
    private $extras;
    private $number;
    private $price;

    private $reservations = array();
    private $reservation;
    private $findkey;

    public function __construct(
        int $beds,
        string $type,
        bool $restroom,
        bool $balcony,
        array $extras,
        int $number,
        int $price
    )
    {
        $this->beds = $beds;
        $this->type = $type;
        $this->restroom = $restroom;
        $this->balcony = $balcony;
        $this->extras = $extras;
        $this->number = $number;
        $this->price = $price;
    }



    public function addReservation ($reservation) {
        return array_push($reservations, $reservation);
    }

    public function removeReservation ($reservation){
        $findkey = array_search($reservation, $reservations);
        unset($reservations[$findkey]);
    }

    public function getNumber () {
        return $this->number;
    }
    public function getPrice () {
        return $this->price;
    }
}