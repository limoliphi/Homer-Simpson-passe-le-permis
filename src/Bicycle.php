<?php


namespace App;

require_once 'LightableInterface.php';


class Bicycle extends Vehicle
{
    public function switchOn(): bool
    {
        if($this->getCurrentSpeed() >=10) {
        return true;
        }else return false;
    }
    public function switchOff(): bool
    {
        return false;
    }
}