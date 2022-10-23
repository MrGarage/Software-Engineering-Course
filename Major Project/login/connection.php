<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "login_info";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$con) {
    die("failed to connect: " . mysqli_connect_error());
}
