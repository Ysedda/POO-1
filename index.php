<?php

class Car{
    private int $nbWheel;
    public function getNbWheel():int
    {
        return $this->nbWheel;
    }

    private int $currentSpeed;
    public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }

    private string $color;
    public function getColor():string 
    {
        return $this->color;
    }

    private int $nbSeats;
    public function getNbSeats():int 
    {
        return $this->nbSeats;
    }

    private string $energy;
    public function getEnergy():int 
    {
        return $this->energy;
    }

    private int $energyLevel;
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
 
    public function __construct(string $color, int $nbSeats, string $energy)
    {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
    }

    public function forward():string 
    {
        $this->currentSpeed = 15;
        return 'Go !';
    }

    public function brake():string
    {
        $sentence = '';
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Brake !!!';
        }
        $sentence .= 'I\'m stopped !';
        return $sentence;
    }

    public function start():string 
    {
        $sentence = '';
        while ($this->currentSpeed = 0) {
            $this->currentSpeed++;
            $sentence .= 'The car has been started!';
        }
        $sentence .= 'I\'m already started';
        return $sentence;
    }
}
