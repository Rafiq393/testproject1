<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$accountof=$_POST['accountof'];
	
	$panno=$_POST['panno'];
	$tinno=$_POST['tinno'];

	$phone=$_POST['phone'];
	
	$date=$_POST['date'];
	$cat=$_POST['cat'];

	$debitt=$_POST['debitt'];
	
	$creditt=$_POST['creditt'];
	$balancee=$_POST['balancee'];

	
	$sql="INSERT INTO shoptable (accountof,panno,tinno,phone,date,cat,debitt,creditt,balancee)VALUES('$accountof','$panno','$tinno','$phone','$date','$cat','$debitt','$creditt','$balancee')";
	$data=mysqli_query($connection,$sql);
	if($data)
	{
		echo header("location:form.php");
	}else{
		echo "there is a problem";
	}
}
?>
