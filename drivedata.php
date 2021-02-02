<?php
$conn = new mysqli('localhost', 'root', '', 'hyundai');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO `drive` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";
if ($conn->query($sql) === TRUE) {
    echo "Call You Back Soon!";
}
else 
{
    echo "failed";
}
?>
