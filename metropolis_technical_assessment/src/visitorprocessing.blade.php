<?php

use Illuminate\Http\Request;
use App\User;

function save(Request $req)
{
    // print_r($req->input());
    $user = new User;
    $user->name = $req->name;
    $user->contactnumber = $req->contactnumber;
    $user->purpose = $req->purpose;
    $user->save();
}

session_start();
isset($_SESSION['id']) && isset($_SESSION['name']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <form style=text-align:center>
        <!-- <div style="text-align: center; height:100px"> -->
        <h2 style="font-weight:bold">Welcome to our office!</h2>
        <h2>Please remember to checked out before you leave!</h2>
        <a href="visitorcheckout.blade.php">
            <button1>Checked Out!</button1>
        </a>
        <!-- </div> -->
    </form>


</body>

</html>