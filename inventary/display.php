
<html>
<head>
	<title>insert</title>
	<style>
body{
	background-color: #f7fefd;
}

	</style>
</head>
<body>
	
	</body>
	</html>
	
<?php
include("connection.php");
$query="SELECT * FROM inventary";
$data=mysqli_query($connection,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
//echo $result['name'].''.$result['lname'];
if($total !=0)
{
?>
<table width="70%" height="40" border="3" align="center" style="margin-top: 40px;">
	<h2 align="center" color="#f7fefd" >Stock  Details Gets Displayed Here</h2>
	<tr width="20" height="10">
		<tr ><th colspan="7"><h1>ABD Enterprises</h1></th></tr>
		<td>Product Code</td>
		<td>Product Name</td>
		<td>Total Stock</td>
		<td>Stock Sold</td>
		<td>Available Stock</td>
		<td>Update</td>
		<td>Delete</td>
		
		
		
		
	</tr>

<?php
while($result=mysqli_fetch_assoc($data))
{
	echo "<tr>
		<td>".$result['product_code']."</td>
		<td>".$result['product_name']."</td>
		<td>".$result['total_stock']."</td>
		<td>".$result['stock_sold']."</td>
		<td>".$result['available_stock']."</td>
		
		<td><a href='update.php?id=$result[id]'>Update</a></td>
		<td><a href='delete.php?id=$result[id]'>Delete</a></td>
		
		
	</tr>";

	
}  
}
?>

</table>
<a href="form.php">Go Back</a>
<tr>
		<center><th><input type="button" onclick="window.print()" value="Print Now" </th></center>
	</tr>
