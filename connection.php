<?php

$host="localhost";
$user = "root";
$password = "";
$database = "registration";

$conn = mysqli_connect($host, $user, $password, $database);

if($conn){
    echo "";
}
else{ die(mysqli_connect_error($conn));}