<?php

class ChargingAccount extends Account
{
    private $fee = 1.02;

    public function withdraw(int $amount)
    {
        $this->balance -= $amount * $this->fee;
    }
}