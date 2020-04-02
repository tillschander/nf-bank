<?php

include 'src/Bank.php';
include 'src/Address.php';
include 'src/Account.php';
include 'src/Account/ChargingAccount.php';
include 'src/Account/InterestAccount.php';
include 'src/Customer.php';

use NeueFische\Account;

$address = new NeueFische\Address();
$address->street = 'Am Geldspeicher 1';
$address->city = 'Entenhausen';

$bank = new NeueFische\Bank();
$bank->name = 'Geldspeicher';
$bank->address = $address;

$dagobert = new NeueFische\Customer();
$dagobert->firstname = 'Dagobert';
$dagobert->lastname = 'Duck';
$dagobert->address = $address;

$donald = new NeueFische\Customer();
$donald->firstname = 'Donald';
$donald->lastname = 'Duck';
$donald->address = $address;

$dagobertsAccount = new Account\InterestAccount($dagobert);
$bank->openAccount($dagobertsAccount);

$donaldsAccount = new Account\ChargingAccount($donald);
$bank->openAccount($donaldsAccount);

$dagobertsAccount->deposit(1000);
$dagobertsAccount->withdraw(100);
echo $dagobertsAccount->getBalance() . "\n";

$donaldsAccount->deposit(1000);
$donaldsAccount->withdraw(100);
echo $donaldsAccount->getBalance() . "\n";


// $donaldsAccount->transfer(100, $dagobertsAccount);
// var_dump($bank);
