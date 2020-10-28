<?php

require_once 'SavingsAccount.php';

$savingsAccount = new SavingsAccount();

$amount = (int)readline('How much money is in account ?');
$annualInterestRate = (int)readline('Enter annual interest rate ?');
$years = (int)readline('How long has the account been opened? ');


$yearsToCalc = 0;
while ($yearsToCalc < $years) {
    $x = 1;
    $amountStart = $amount;
    $depositForMonth = (int)readline('Enter amount deposited for month ?');
    $withdrawn = (int)readline('Enter amount withdrawn ?');
    $savingsAccount->addWithdrawn($withdrawn);

    while ($x <= 12) {
        $x++;
        $amount = $amount + $depositForMonth + (($amount + $depositForMonth) * round($annualInterestRate / 12 / 100, 4));
    }
    $amountYear = round($amount, 2);
    $depositPerYear = $depositForMonth * 12;
    $savingsAccount->addDepositPerYear($depositPerYear);
    $earnedPerYear = round($amountYear - $depositPerYear - $amountStart, 2);
    $savingsAccount->addEarnedPerYear($earnedPerYear);
    $amount = $amountYear - $withdrawn;
    $yearsToCalc++;

}

echo 'Total deposited: $' . $savingsAccount->getAllDeposit() . PHP_EOL;
echo 'Total withdrawn: $' . $savingsAccount->getAllWithdrawn() . PHP_EOL;
echo 'Total interest earned: $' . $savingsAccount->getAllEarnedPerYear() . PHP_EOL;
echo 'Ending balance: $' . $amount . PHP_EOL;
