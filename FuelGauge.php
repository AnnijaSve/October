<?php

class FuelGauge
{
    private int $currentFuel;

    public function __construct(int $currentFuel)
    {
        $this->currentFuel = $currentFuel;
    }

    public function getCurrentFuel(): int
    {
        if ($this->currentFuel < 10) {
            echo 'Low fuel' . PHP_EOL;
        }
        return $this->currentFuel;
    }


}