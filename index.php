<?php

include 'Bank.php';
include 'Address.php';
include 'Account.php';
include 'Customer.php';

$address = new Address();
$address->street = 'Am Geldspeicher 1';
$address->city = 'Entenhausen';

$bank = new Bank();
$bank->name = 'Geldspeicher';
$bank->address = $address;

$dagobert = new Customer();
$dagobert->firstname = 'Dagobert';
$dagobert->lastname = 'Duck';
$dagobert->address = $address;

$donald = new Customer();
$donald->firstname = 'Donald';
$donald->lastname = 'Duck';
$donald->address = $address;

$dagobertsAccount = new Account($dagobert);
$dagobertsAccount->deposit(99999);
$bank->openAccount($dagobertsAccount);

$donaldsAccount = new Account($donald);
$donaldsAccount->deposit(50);
$bank->openAccount($donaldsAccount);

$donaldsAccount->transfer(100, $dagobertsAccount);

var_dump($bank);
