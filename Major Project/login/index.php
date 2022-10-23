<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Index</title>

</head>

<body>
    <a href="login.php">Logout</a>
    <img src="logo.png" alt="Food Pantry logo">
    <h1>Hello, <?php echo $user_data['name']; ?></h1>
    <hr>
    <div class="Survey-Form">
        <form method="post">
            <a href="firstTime.php">First Time Form</a>
        </form>
    </div>

</body>

</html>