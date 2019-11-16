<?php


namespace App;



interface LightableInterface
{

    public function switchOn(): bool;
    public function switchOff(): bool;

}