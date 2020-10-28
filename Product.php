<?php
class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string  $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }


}