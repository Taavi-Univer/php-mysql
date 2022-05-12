<?php

include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [
    new Account(12345, 'Checking', -60),
    new Account(54321, 'Savings', 360)
];

$customer = new Customer('Taavi', 'Univer', 'taaviuniver@gmail.com', 'abcd', $accounts);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Bank</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Name: <?= $customer->getFullName() ?></h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <?php foreach ($customer->accounts as $account) { ?>

            <tr>
                <td><?= $account->number ?></td>
                <td><?= $account->type ?></td>

                <?php if ($account->getBalance() >= 0) { ?>
                    <td class="blue">
                    <?php } else { ?>
                    <td class="red">
                    <?php } ?>
                    $ <?= $account->getBalance() ?></td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>