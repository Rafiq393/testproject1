<?php
include("connection.php");
$id = $_GET['id'];
$query="SELECT * FROM new_stock WHERE id='$id'";
$data=mysqli_query($connection,$query);
while($result = mysqli_fetch_assoc($data))
{
	$id = $result['id'];
	$product_code = $result['product_code'];
	$product_name = $result['product_name'];
	$base_cost = $result['base_cost'];
	$mrp_cost = $result['mrp_cost'];


	
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
		ID<br><br>
<input type="text" name="id" size="30" value="<?php echo $id ?>"><br><br>
Product Code<br><br>
<input type="text" name="product_code" size="30" value="<?php echo $product_code ?>"><br><br>
Product Name<br><br>
<input type="text" name="product_name" size="30" value="<?php echo $product_name ?>"><br><br>
Base Cost<br><br>
<input type="text" name="base_cost" size="30" value="<?php echo $base_cost ?>"><br><br>
M.R.P<br><br>
<input type="text" name="mrp_cost" size="30" value="<?php echo $mrp_cost ?>"><br><br>



<input type="submit" name="submit" value="submit">
</form>

</fieldset>

	</body>
	</html>
	<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$product_code=$_POST['product_code'];
	
	$product_name=$_POST['product_name'];
	$base_cost=$_POST['base_cost'];

	$mrp_cost=$_POST['mrp_cost'];
	
	
	$sql="UPDATE `new_stock` SET product_code='$product_code',product_name='$product_name',base_cost='$base_cost',mrp_cost='$mrp_cost' WHERE id='$id'";
	$data=mysqli_query($connection,$sql);
	if($data)
	{
		 echo header("location:display.php");
	}else{
		echo "there is a problem";
	}
}
?>