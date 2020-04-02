<?php

namespace NeueFische\Account;

class InterestAccount extends \NeueFische\Account
{
    private static $interest = 1.02;

    public function deposit(int $amount)
    {
        $this->balance += $amount * static::$interest;
    }
}