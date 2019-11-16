<?php

namespace App;

final class PedestrianWay extends HighWay
{


    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Skateboard || $vehicle instanceof Bicycle) {
            $this->setCurrentVehicles($vehicle);
        }

    }




}