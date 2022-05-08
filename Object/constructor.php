<?php

declare(strict_types=1);

class Account
{
    public int $number;
    public string $name;
    public float $balance;

    public function __construct(int $number, string $name, float $balance = 0.00)
    {
        $this->number = $number;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit(float $sum): float
    {
        $this->balance += $sum;
        return $this->balance;
    }
}

$account = new Account(1234, 'Taavi', 23.67,);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>

<body>

    <h2>Users</h2>
    <p>Name: <?= $account->name ?></p>
    <p>Account: <?= $account->deposit(900.00) ?></p>
</body>

</html>