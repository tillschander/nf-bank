<?php

class InterestAccount extends Account
{
    private static $interest = 1.02;

    public function deposit(int $amount)
    {
        $this->balance += $amount * static::$interest;
    }
}