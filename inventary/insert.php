<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$product_code=$_POST['product_code'];
	
	$product_name=$_POST['product_name'];
	$total_stock=$_POST['total_stock'];

	$stock_sold=$_POST['stock_sold'];

	$available_stock=$_POST['available_stock'];
	
	
	
	
	$sql="INSERT INTO inventary (product_code,product_name,total_stock,stock_sold,available_stock)VALUES('$product_code','$product_name','$total_stock','$stock_sold','$available_stock')";
	$data=mysqli_query($connection,$sql);
	if($data)
	{
		echo header("location:form.php");
	}else{
		echo "there is a problem";
	}
}
?>

