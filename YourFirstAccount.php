<?php

class MyAccount
{
    private string $name;
    private int $balance;

    public function __construct(string $name, int $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function balance(): int
    {
        return $this->balance;
    }

    public function deposit(int $deposit): int
    {
        return $this->balance += $deposit;
    }
}

$myAccount = new MyAccount("My account", 100);

$myAccount->deposit(20);
echo "My account balance now is: " . $myAccount->balance(), PHP_EOL;
