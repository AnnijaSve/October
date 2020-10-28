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

$bartos_account = new Account("Barto's account", 100);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000);

$bartos_account = $bartos_account->getName() . ' ' . $bartos_account->balance();
$bartos_swiss_account = $bartos_swiss_account->getName() . ' ' . $bartos_swiss_account->balance();

echo "Initial state", PHP_EOL;
echo $bartos_account, PHP_EOL;
echo $bartos_swiss_account, PHP_EOL;

$bartos_account = new Account("Barto's account", 100);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000);

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->balance(), PHP_EOL;
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: " . $bartos_swiss_account->balance(), PHP_EOL;

$bartos_account = $bartos_account->getName() . ' ' . $bartos_account->balance();
$bartos_swiss_account = $bartos_swiss_account->getName() . ' ' . $bartos_swiss_account->balance();

echo "Final state", PHP_EOL;
echo $bartos_account, PHP_EOL;
echo $bartos_swiss_account, PHP_EOL;