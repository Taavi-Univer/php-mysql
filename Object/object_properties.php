<?php

class Customer
{
    public string $name;
    public string $age;
    public string $email;
}

class Account
{
    public int $number;
    public float $balance;
}

$customer = new Customer();
$account = new Account();

$customer->name = 'Taavi';
$account->balance = 300.30;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
</head>

<body>
    <h2>Customers</h2>
    <p>Name: <?= $customer->name ?></p>
    <p>Account: $<?= $account->balance ?></p>
</body>

</html>