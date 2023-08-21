<?php 
$name = $_POST["name"];
$age = $_POST["age"];
$email = $_POST["email"];
$message = $_POST["message"];


$server="localhost";
$username="root";
$password="";
$db="dbase";

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

$sql="INSERT INTO `contact_info`(`name`, `age`, `email`, `message`) VALUES ('$name','$age','$email','$message')";
$result=mysqli_query($conn,$sql);
if(isset($result))
{
    echo'Data inserted successfully';
}
else
{
    echo'Data inserted. Try Again!';
}
mysqli_close($conn);
?>