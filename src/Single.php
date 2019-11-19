<?php declare(strict_types = 1);


namespace Nfq\Academy;


class Single extends Room
{
    public function __construct(int $number, int $price) {
        parent::__construct(
            1,
            'Standard room',
            true,
            false,
            array("TV","air-conditioning"),
            $number,
            $price
        );
    }
}