<?php

class Car {
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
}

public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}
public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}
public function getNbWheels(): int
{
    return $this->nbWheels;
}
public function setCurrentSpeed(int $currentSpeed): void
{
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
}
public function getColor(): string
{
    return $this->color;
}
public function getNbSeats(): string
{
    return $this->nbSeats;
}
public function getEnergy(): string
{
    return $this->energy;
}
public function getEnergyLevel(): string
{
    return $this->energyLevel;
}
public function getCurrentSpeed(): int
{
return $this->currentSpeed;
}

}