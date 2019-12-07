<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$product_code=$_POST['product_code'];
	
	$product_name=$_POST['product_name'];
	$base_cost=$_POST['base_cost'];

	$mrp_cost=$_POST['mrp_cost'];
	
	
	
	
	$sql="INSERT INTO new_stock (product_code,product_name,base_cost,mrp_cost)VALUES('$product_code','$product_name','$base_cost','$mrp_cost')";
	$data=mysqli_query($connection,$sql);
	if($data)
	{
		echo header("location:new_stock.php");
	}else{
		echo "there is a problem";
	}
}
?>
