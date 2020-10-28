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

    function transfer(Account $from, Account $to, int $howMuch): Account
    {
        if($this->balance >= $howMuch) {
            $from->withdrawal($howMuch);
            $to->deposit($howMuch);
        }
        return $this;

    }
}

$A = new Account('A', 100);
$B = new Account('B', 0);
$C = new Account('C', 0);

echo $A->getName() . ' balance ar start ' . $A->balance(), PHP_EOL;
echo $B->getName() . ' balance ar start ' . $B->balance(), PHP_EOL;
echo $C->getName() . ' balance ar start ' . $C->balance(), PHP_EOL;

$Matt = new Account('Matt\'s account', 1000);
$myAccount = new Account('My account', 0);

$A->transfer($A, $B, 50);
$A->transfer($A, $C, 25);

echo 'After transfer: ' . PHP_EOL;
echo $A->getName() . ' balance now is ' . $A->balance(), PHP_EOL;
echo $B->getName() . ' balance now is ' . $B->balance(), PHP_EOL;
echo $C->getName() . ' balance now is ' . $C->balance(), PHP_EOL;

