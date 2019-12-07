<a href="search.php">Go Back</a>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$product_code=$_POST['product_code'];
	$query="SELECT * FROM inventary WHERE product_code='$product_code'";
	$sql=mysqli_query($connection,$query);
	if($data=mysqli_num_rows($sql)>0)
		?>
	<table border="1" width="90%" height="30%" bgcolor="#f7fefd" align="center" style="margin-top: 180px;">
		<tr>
			

			<td>Product Code</td>
		<td>Product Name</td>
		<td>Total Stock</td>
		<td>Stock Sold</td>
		<td>Available Stock</td>
		
		

		</tr>
		
	
	<?php
	while($row=mysqli_fetch_assoc($sql))
	{
		?>
		<tr>
			<td><?php echo $row['product_code'];?></td>
			<td><?php echo $row['product_name'];?></td>
			<td><?php echo $row['total_stock'];?></td>
			<td><?php echo $row['stock_sold'];?></td>
			<td><?php echo $row['available_stock'];?></td>
		
		</tr>
		<?php
		
	}
}

?>
<br>
</table>
<br>
<tr>
		<center><th><input type="button" onclick="window.print()" value="Print Now" </th></center>
	</tr>