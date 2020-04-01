<?php

class InterestAccount extends Account
{
    private $interest = 1.02;

    public function deposit(int $amount)
    {
        $this->balance += $amount * $this->interest;
    }
}