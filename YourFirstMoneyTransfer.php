<?php

class Account
{
    private string $name;
    private int $balance;

    public function __construct(string $name, int $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function balance(): int
    {
        return $this->balance;
    }

    public function withdrawal(int $withdrawal): int
    {
        return $this->balance -= $withdrawal;
    }

    public function deposit(int $deposit): int
    {
        return $this->balance += $deposit;
    }

}

$Matt = new Account('Matt\'s account', 1000);
$myAccount = new Account('My account', 0);
$Matt->withdrawal(100);
$myAccount->deposit(100);

echo $Matt->getName() . ' balance now is ' . $Matt->balance(), PHP_EOL;
echo $myAccount->getName() . ' balance now is ' . $myAccount->balance(), PHP_EOL;
