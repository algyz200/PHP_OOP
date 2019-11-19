<?php declare(strict_types = 1);


namespace Nfq\Academy;

class Guest

{
    private $name;
    private $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;

    }

    public function getName () {
        $this->name;
    }

    public function getSurname () {
        $this->surname;
    }

    public function __toString()
    {
        return $this->name . " " . $this->surname;
    }
}