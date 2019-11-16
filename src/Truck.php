<?php


namespace App;


class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private $energy;
    private $capacity;
    private $load = 0;
    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }
    public function full() : string
    {
        if ($this->load < $this->capacity){
            $quantity =  'In filling';
        } else {
            $quantity = 'Full';
        }
        return $quantity;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function setCapacity(string $capacity): void
    {
        $this->capacity = $capacity;
    }
    public function getLoad(): int
    {
        return $this->load;
    }
    public function setLoad(string $load): void
    {
        if ($load <= $this->capacity) {
            $this->load = $load;
        } else {
            $this->load = $this->capacity;
        }
    }
}