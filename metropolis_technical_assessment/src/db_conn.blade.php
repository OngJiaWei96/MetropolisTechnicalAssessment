<?php
$sname = "localhost";
$username = "root";
$password = "";

$db_name = "visitor_registration_db";
$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed";
}
