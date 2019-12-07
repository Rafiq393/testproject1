<?php
include("connection.php");
$id = $_GET['id'];
$query="SELECT * FROM inventary WHERE id='$id'";
$data=mysqli_query($connection,$query);
while($result = mysqli_fetch_assoc($data))
{
	
	$product_code = $result['product_code'];
	$product_name = $result['product_name'];
	$total_stock = $result['total_stock'];
	$stock_sold = $result['stock_sold'];
	$available_stock = $result['available_stock'];


	
}


?>
<html>
<head>
	<title>project</title>
<style>
body{
	background-color:#f7fefd;
	align-content: center;
	
	text-align: center;
}
input{
	color:red;
	margin-left: 50px;
	text-align: center;
}
form{
	align-items: center;
}

fieldset{
	margin-left: 300px;
	margin-right: 300px;
	
}
</style>
</head>
<body>
	<fieldset>
		<legend>
			<H1>Submit Your Details Here</H1>
		</legend>
	<form method="POST" action="" enctype="multipart/form-data">
		
Product Code<br><br>
<input type="text" name="product_code" size="30" value="<?php echo $product_code ?>"><br><br>
Product Name<br><br>
<input type="text" name="product_name" size="30" value="<?php echo $product_name ?>"><br><br>
Total Stock<br><br>
<input type="text" name="total_stock" size="30" value="<?php echo $total_stock ?>"><br><br>
Stock Sold<br><br>
<input type="text" name="stock_sold" size="30" value="<?php echo $stock_sold ?>"><br><br>

Available Stock<br><br>
<input type="text" name="available_stock" size="30" value="<?php echo $available_stock ?>"><br><br>



<input type="submit" name="submit" value="submit">
</form>

</fieldset>

	</body>
	</html>
	<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$product_code=$_POST['product_code'];
	
	$product_name=$_POST['product_name'];
	$total_stock=$_POST['total_stock'];

	$stock_sold=$_POST['stock_sold'];

	$available_stock=$_POST['available_stock'];
	
	
	$sql="UPDATE `inventary` SET product_code='$product_code',product_name='$product_name',total_stock='$total_stock',stock_sold='$stock_sold',available_stock='$available_stock' WHERE id='$id'";
	$data=mysqli_query($connection,$sql);
	if($data)
	{
		 echo header("location:display.php");
	}else{
		echo "there is a problem";
	}
}
?>