<?php


//including the database connection file
//require_once("../config/connection.php");
 $conn = new mysqli("localhost","root","","website");
						
//getting id of the data from url
session_start();


$id = $_GET['name'];
 
//deleting the row from table
//$sql = "delete from booking where booking_id='".$id."'";

$sql = "update userdata set status=1 where name='".$id."'";

$result=mysqli_query($conn,$sql);

if($result)
{
	echo "<meta http-equiv='refresh' content='0;url=advocatedashboard.php'>";
	 //header("Location:advocatedashboard.php"); 
}



?>