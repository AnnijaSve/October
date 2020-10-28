<?php

class Date
{
    private int $day;
    private int $month;
    private int $year;

    public function __construct(int $day, int $month, int $year)
    {

        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getMont(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}

$date = new Date(14,10,2020);

echo $date->getDay() . '/';
echo $date->getMont() . '/';
echo $date->getYear() . '/';
echo PHP_EOL;