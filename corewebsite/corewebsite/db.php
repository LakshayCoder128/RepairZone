<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = new mysqli($servername, $username, $password, 'mydb');

//Check connection
if($conn->connect_error){
    echo "Connection failed<br />";
    die("Connection failed: " . $conn->connect_error);
}else{
    //echo "Connected successfully<br />";
}
?>        
