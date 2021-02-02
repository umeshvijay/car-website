<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost", "root", "", "hyundai");
 $query = "SELECT * FROM contact WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["city"] = $row["city"];
  $data["address"] = $row["address"];
  $data["ph"] = $row["ph"];
 
 }

 echo json_encode($data);
}
?>