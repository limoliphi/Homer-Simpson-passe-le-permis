<?php

namespace App;

abstract class HighWay
{


    protected $currentVehicles = [];
    protected $nbLane;
    protected $maxSpeed;

    abstract protected function addVehicle(vehicle $vehicle);

    /**
     * @return mixed
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param mixed $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    /**
     * @return mixed
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }


}