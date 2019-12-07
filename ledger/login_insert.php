<?php
include("connection.php");

if(isset($_POST['submit']))
{
	
	
	$email=$_POST['email'];
	$mypass=$_POST['mypass'];

	
	$sql="INSERT INTO shoplogin (email,mypass)VALUES('$email','$mypass')";
	$data=mysqli_query($connection,$sql);
	if($data)
	{
		echo header("location:../index.php");
	}else{
		echo "there is a problem";
	}
}
?>
