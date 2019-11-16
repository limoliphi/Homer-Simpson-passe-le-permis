<?php


namespace App;

require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private $energy;
    private $energyLevel;

    /**
     * @param int $hasParkBrake
     */

    private $hasParkBrake = true;


    public function setParkBrake()
    {
        if ($this->hasParkBrake == false) {
            $this->hasParkBrake = true;
        } else {
            $this->hasParkBrake = false;
        }
    }


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function start()
    {
        $sentence = "";
        if ($this->hasParkBrake) {
            $sentence = 'Le frein à main est enclenché!';
            throw new \Exception($sentence);
        }
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}