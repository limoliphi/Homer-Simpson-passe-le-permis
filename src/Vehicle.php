<?php


namespace App;


class Vehicle
{
    protected $color;
    protected $nbWheels;

    protected $nbSeats;

    protected $currentSpeed;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go, Johnny go, go!";
    }
    public function brake(): string
    {
        $sentence = '';
        while ($this->currentSpeed > 0){
            $this->currentSpeed--;
            $sentence .= 'Brake, please !';
        }
        $sentence .= 'I\'m stopped but it\'s OK';
        return $sentence;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->$nbSeats = $nbSeats;
    }
}