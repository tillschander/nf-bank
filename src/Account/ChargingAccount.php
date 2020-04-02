<?php

namespace NeueFische\Account;

class ChargingAccount extends \NeueFische\Account
{
    private static $fee = 1.02;

    public function withdraw(int $amount)
    {
        $this->balance -= $amount * static::$fee;
    }
}