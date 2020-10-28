<?php

class DrinksCompany
{

    private int $totalCustomers;
    private int $energyDrinkCustomer;
    private int $preferCitrus;

    public function __construct(int $totalCustomers, int $energyDrinkCustomer, int $preferCitrus)
    {
        $this->totalCustomers = $totalCustomers;
        $this->energyDrinkCustomer = $energyDrinkCustomer;
        $this->preferCitrus = $preferCitrus;
    }

    public function getTotalCustomers(): int
    {
        return $this->totalCustomers;
    }

    public function getEnergyDrinkCustomer(): int
    {
        return $this->energyDrinkCustomer;
    }

    public function getPreferCitrus(): int
    {
        return $this->preferCitrus;
    }

    public function getTotalEnergyDrinkCustomer(): int
    {
        return $this->getTotalCustomers() * ($this->getEnergyDrinkCustomer() / 100);
    }

    public function getTotalPreferCitrus(): int
    {
        return $this->getTotalEnergyDrinkCustomer() * ($this->getPreferCitrus() / 100);
    }


}


$drinksCompany = new DrinksCompany(12467, 14, 64);

echo "Total number of people surveyed " . $drinksCompany->getTotalCustomers() . PHP_EOL;
echo "Approximately " . $drinksCompany->getTotalEnergyDrinkCustomer() . " bought at least one energy drink" . PHP_EOL;
echo $drinksCompany->getTotalPreferCitrus() . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL;
