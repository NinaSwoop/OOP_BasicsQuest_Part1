<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    protected int $load = 60;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $storageCapacity);
        $this->energy = $energy;
    }
    

    public function getEnergy(): string
    {
        return $this->energy;
    }

public function setEnergy(string $energy): Truck
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

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getLoad(): string
    {
        if ($this->load >= 50) {
            return "<br> Truck is full";
        }
        else {
            return "<br> Truck is in filling";
        }
    }
}
