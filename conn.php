<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dname="hotel";

$conn = mysqli_connect($servername, $username, $password,$dname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



?>