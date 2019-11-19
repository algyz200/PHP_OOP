<?php declare(strict_types = 1);


namespace Nfq\Academy;


class Apartment extends Room
{
    public function __construct(int $number, int $price) {
        $this->number = $number;
        $this->price = $price;
        parent::__construct(
            4,
            'Diamond room',
            true,
            true,
            array("TV","air-conditioning","refrigerator","minibar","bathtub","kitchen box","wifi")
        );
    }
}