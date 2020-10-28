<?php

abstract class Account
{
    public abstract function show_user_name_and_balance(): string;

}

class Ben extends Account
{
    private $username;
    private $balance;

    public function __construct(string $username, float $balance )
    {
        $this->username = $username;
        $this->balance = $balance;
    }


    public function show_user_name_and_balance(): string
    {
        if ($this->balance = -($this->balance)) {
            return $this->username . ', $' . number_format(+$this->balance, 2);
        }
        return $this->username . ', $' . number_format($this->balance, 2);
    }


}
$ben = new Ben('Benson', -17.4);
echo $ben->show_user_name_and_balance(), PHP_EOL;

