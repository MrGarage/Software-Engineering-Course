<?php
session_start();
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $name = $_POST['name'];
    $netID = $_POST['netID'];
    $password = $_POST['password'];

    if (!empty($netID) && !empty($password)) {
        //save to database
        $RUID = random_num(9);
        $query = "insert into students (RUID, netID, password, name) values ('$RUID', '$netID', '$password','$name')";
        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    } else {
        echo "Wrong info";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="Login-Form">
        <h1>Signup</h1>
        <form method="post">
            <p class="Password-text">Name:</p>
            <input id="text" type="name" class="input-box" name="name" />
            <p class="NetID-text">NetID:</p>
            <input id="text" type="netID" class="input-box" name="netID" />
            <p class="Password-text">Password:</p>
            <input id="text" type="password" class="input-box" name="password" />
            <p class="safety-text">
                Ensure proper security — keep your password a secret
            </p>

            <!--<button type="button" class="Login-button">Log In</button> -->
            <input id="button" type="submit" class="Login-button" value="Signup">
            <p class="reminder-text">
                For security reasons, please log out and exit your web browser when
                you are done accessing services that require authentication!
            </p>
        </form>
    </div>
</body>

</html>