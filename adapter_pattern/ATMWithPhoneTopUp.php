<?php

class ATMWithPhoneTopUp extends ATM
{
    public function getTopUp(float $amount, int $time): string
    {
        if ($this->reduceBalance($amount) === true) {
            return $this->generateTopUpCode($amount, $time);
        } else {
            throw new Exception("Couldn't withdraw money.");
        }
    }

    private function generateTopUpCode(float $amount, int $time): string
    {
        return $amount . $time . rand(0, 10000);
    }
}
