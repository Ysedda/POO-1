<?php

class Car{
    private int $nbWheel;

    private int $currentSpeed;

    private string $color;
    
    private int $nbSeats;

    private string $energy;

    private int $energyLevel;
    
    public function __construct(string $color, int $nbSeats, string $energy)
    {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
    }
    
    public function getNbWheel():int
    {
        return $this->nbWheel;
    }
    
     public function getCurrentSpeed():int
    {
        return $this->currentSpeed;
    }
    
    public function getColor():string 
    {
        return $this->color;
    }
    
    public function getNbSeats():int 
    {
        return $this->nbSeats;
    }
    
    public function getEnergy():int 
    {
        return $this->energy;
    }
    
    public function getEnergyLevel()
    {
        return $this->energyLevel;
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
        if ($this->currentSpeed === 0) {
            $this->currentSpeed+1;
            $sentence .= 'The car has been started!';
        }
        $sentence .= 'I\'m already started';
        return $sentence;
    }
}
