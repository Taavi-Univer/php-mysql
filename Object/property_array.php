<?php

declare(strict_types=1);

class Account
{

    protected int $age;
    public $user;

    public function __construct(int $age, $user)
    {
        $this->age = $age;
        $this->user = $user;
    }


    public function get_age(): int
    {
        return $this->age;
    }
}

function get_nameSum(int $a, int $b, string $name): string
{
    return "$name " . $a + $b;
}

$user =
    [
        'first_name' => 'Taavi',
        'last_name' => 'Univer',
    ];

$account = new Account(41, $user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array as property</title>
</head>

<body>
    <h2>First name: <?= $account->user['first_name'] ?></h2>
    <h2>Last name: <?= $account->user['last_name'] ?></h2>
    <h2>Age: <?= $account->get_age() ?></h2>

    <p>Name and sum: <?= get_nameSum(2,  3, 'Taavi',) ?></p>
</body>

</html>