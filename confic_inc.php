<?php
$servername = "localhost"; //hosting/127.0.0.1
$username= "root"; //User Databass
$password = ""; //User password
$dbname = "db_basic_php"; //Database Name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Change Character set to utf8
$conn -> set_charset("utf8");

//Check connection
if ($conn->connect_error){
    die(" Connection faieled: " . $conn->connect_error);
}else{
    echo "Connnect Successfully!";
}
?>