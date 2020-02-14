<?php
require_once 'ATM.php';
require_once 'ATMWithPhoneTopUp.php';


$atm = new ATM(500.00);
$atm->withdraw(50);
echo $atm->getBalance();
echo "\n<br>";

$adaptedATM = new ATMWithPhoneTopUp(500.00);
echo "Top-up code: " . $adaptedATM->getTopUp(50, time());
echo "\n<br>";
echo $adaptedATM->getBalance();

