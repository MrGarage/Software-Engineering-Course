<?php
session_start();
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $netID = $_POST['netID'];
    $password = $_POST['password'];
    if (!empty($netID) && !empty($password)) {
        //read from database
        $query = "select * from students where netID = '$netID' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {

            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);
                if ($user_data['password'] === $password) {

                    $_SESSION['RUID'] = $user_data['RUID'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo "Not a valid netID or Password. Please try again.";
    } else {
        echo "Please try again";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="Login-Form">
        <h1>NetID Login</h1>
        <form method="post">
            <p class="NetID-text">NetID:</p>
            <input type="netID" class="input-box" name="netID" />
            <p class="Password-text">Password:</p>
            <input type="password" class="input-box" name="password" />
            <p class="safety-text">
                Ensure proper security — keep your password a secret
            </p>
            <!--<button type="button" class="Login-button">Log In</button> -->
            <input id="button" type="submit" class="Login-button" value="Login">
            <p class="reminder-text">
                For security reasons, please log out and exit your web browser when
                you are done accessing services that require authentication!
            </p>
        </form>
    </div>
</body>

</html>