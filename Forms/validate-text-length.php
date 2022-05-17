<?php

declare(strict_types=1);

$username = '';
$message = '';

function is_text($text, int $min = 0, $max = 1000): bool
{
    $length = mb_strlen($text);
    return ($length >= $min && $length <= $max);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $valid = is_text($username, 5, 18);

    if ($valid) {
        $message = 'Username is valid';
    } else {
        $message = 'Username must be 5-18 charecters';
    }
}

?>

<?= $message ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate text length</title>
</head>

<body>
    <form action="validate-text-length.php" method="POST">
        Username: <input type="text" name="username" value="<?= htmlspecialchars($username) ?>">
        <input type="submit" value="Save">
    </form>
</body>

</html>