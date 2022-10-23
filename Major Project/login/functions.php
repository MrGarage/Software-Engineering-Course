<?php

function check_login($con)
{

    if (isset($_SESSION['RUID'])) {
        $ruid = $_SESSION['RUID'];
        $query = "select * from students where RUID = '$ruid' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: login.php");
    die;
}

function random_num($length)
{
    $text = "";

    for ($i = 0; $i < $length; $i++) {
        $text .= rand(0, 9);
    }
    return $text;
}
