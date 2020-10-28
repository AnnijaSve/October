<?php

class SavingsAccount
{

    private array $depositPerYear = [];
    private array $earnedPerYear = [];
    private array $withdrawn = [];

    public function addDepositPerYear(int $depositPerYear): void
    {
        $this->depositPerYear[] = $depositPerYear;
    }

    public function getAllDeposit(): int
    {
        return array_sum($this->depositPerYear);

    }

    public function addEarnedPerYear(float $earnedPerYear): void
    {
        $this->earnedPerYear[] = $earnedPerYear;
    }

    public function getAllEarnedPerYear(): float
    {
        return array_sum($this->earnedPerYear);

    }
    public function addWithdrawn(int $withdrawn): void
    {
        $this->withdrawn[] = $withdrawn;
    }

    public function getAllWithdrawn(): int
    {
        return array_sum($this->withdrawn);

    }





















}