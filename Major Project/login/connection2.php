<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "test";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$con) {
    die("failed to connect: " . mysqli_connect_error());
}
