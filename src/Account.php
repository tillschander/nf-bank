<?php

namespace NeueFische;

abstract class Account
{
    protected $balance = 0;
    private $holder;

    public function __construct(Customer $holder)
    {
        $this->holder = $holder;
    }

    public function deposit(int $amount)
    {
        $this->balance += $amount;
    }

    public function withdraw(int $amount)
    {
        $this->balance -= $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function transfer(int $amount, Account $account)
    {
        $this->withdraw($amount);
        $account->deposit($amount);
    }
}