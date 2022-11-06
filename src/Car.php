<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

    private int $energyLevel;
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy, string $name)
    {
        parent::__construct($color, $nbSeats, $name);
        $this->setEnergy($energy);
    }

    public function start(): string
    {
        if ($this->getParkBrake()) {
            throw new Exception('Warning : the Park Break is ON !');
        } else {
            $this->forward();
            return "Go !";
        }
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake($hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
}
