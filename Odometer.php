<?php

class Odometer
{
    private int $currentMileage;

    public function __construct(int $currentMileage)
    {
        $this->currentMileage = $currentMileage;
    }

    public function getCurrentMileage(): int
    {
        if ($this->currentMileage >= 999999) {
            return $this->currentMileage = 0;
        }
        return $this->currentMileage;
    }
}
