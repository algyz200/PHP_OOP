<?php declare(strict_types = 1);


namespace Nfq\Academy;


class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct (\DateTime $startDate, \DateTime $endDate, $guest) {
        $this->startDate = $startDate->format('Y-m-d');
        $this->endDate = $endDate->format('Y-m-d');
        $this->guest = $guest;
    }

    public function getStartDate () {
        return $this->startDate;
    }

    public function getEndDate () {
        return $this->endDate;
    }

    public function getGuest () {
        return $this->guest;
    }

    public function __toString()
    {
        $this->startDate;
        $this->endDate;
    }
}