<?php

namespace NeueFische;

class Bank
{
    public $name = '';
    public $address;
    private $accounts = [];

    public function openAccount(Account $account)
    {
        $this->accounts[] = $account;
    }
}