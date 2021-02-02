<?php
$conn = new mysqli('localhost', 'root', '', 'hyundai');
$name=$_POST['name'];
$email=$_POST['email'];
$model=$_POST['model'];

$sql="INSERT INTO `insurance` (`name`, `email`, `model`) VALUES ('$name', '$email', '$model')";
if ($conn->query($sql) === TRUE) {
    echo "Insurance Applied";
}
else 
{
    echo "failed";
}
?>
