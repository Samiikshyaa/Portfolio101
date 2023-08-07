<?php 
$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];
$message = $_POST["message"];

$db="dbase";
$server="localhost";
$username="root";
$password="";

//connection to database
$conn=mysqli_connect($server,$username,$password,$db);
if($conn)
{
    echo 'connection successful';
}
else
{
    echo 'connection failed';
}
mysqli_close($conn);
?>