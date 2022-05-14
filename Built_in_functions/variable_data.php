<?php
// superglobal arrays
$host = $_SERVER['HTTP_HOST'];
$browser = $_SERVER['HTTP_USER_AGENT'];
// --------------------------------------

$username = 'Taavi';

$user_array = [
    'name' => 'Taavi',
    'age' => 41,
    'active' => true,
];

class User
{
    public $name;
    public $age;
    public $active;

    public function __construct($name, $age, $active)
    {
        $this->name = $name;
        $this->age = $age;
        $this->active = $active;
    }
}

$user_object = new User('Taavi', 41, true);
$user_object2 = new User('Member', 51, false);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Data</title>
</head>

<body>
    <h2><?= $host ?></h2>
    <h2><?= $browser ?></h2>
    <p>Variable: <?php var_dump($username); ?></p>
    <p>Array: <?php var_dump($user_array); ?></p>
    <p>Object: <?php var_dump($user_object); ?></p>
    <p>Object2: <?php var_dump($user_object2); ?></p>
</body>

</html>