<a href="../ledger/search.php">Go Back</a>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$product_code=$_POST['product_code'];
	$query="SELECT * FROM new_stock WHERE product_code='$product_code'";
	$sql=mysqli_query($connection,$query);
	if($data=mysqli_num_rows($sql)>0)
		?>
	<table border="1" width="90%" height="30%" bgcolor="#f7fefd" align="center" style="margin-top: 20px;">
		<tr style="text-align: center; color:red;">
			
<td colspan="4">Product Code with details</td>
</tr>
<tr>
	<td>Product Code</td>
		<td>Product Name</td>
		<td>Base Cost</td>
		<td>M.R.P</td>
		

		</tr>
		
	
	<?php
	while($row=mysqli_fetch_assoc($sql))
	{
		?>
		<tr>
			<td><?php echo $row['product_code'];?></td>
			<td><?php echo $row['product_name'];?></td>
			<td><?php echo $row['base_cost'];?></td>
			<td><?php echo $row['mrp_cost'];?></td>
		
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