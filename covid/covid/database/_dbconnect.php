<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corona";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if($conn) {
    echo"";
}   else {
    # code...
    die("Connection failed: " . mysqli_connect_error());
}
?>
