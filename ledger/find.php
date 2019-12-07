<a href="search.php">Go Back</a>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$query="SELECT * FROM shoptable WHERE id='$id'";
	$sql=mysqli_query($connection,$query);
	if($data=mysqli_num_rows($sql)>0)
		?>
	<table border="1" width="90%" height="30%" bgcolor="#f7fefd" align="center" style="margin-top: 180px;">
		<tr>
			

			<td>Recept Number</td>
		<td>Account Of</td>
		<td>Pan Number</td>
		<td>Tin Number</td>
		<td>Phone</td>
		<td>Date</td>
		<td>Particulars</td>
		<td>Debit</td>
		<td>Credit</td>
		<td>Balance</td>
		

		</tr>
		
	
	<?php
	while($row=mysqli_fetch_assoc($sql))
	{
		?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['accountof'];?></td>
			<td><?php echo $row['panno'];?></td>
			<td><?php echo $row['tinno'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['date'];?></td>
			<td><?php echo $row['cat'];?></td>
			<td><?php echo $row['debitt'];?></td>
			<td><?php echo $row['creditt'];?></td>
			<td><?php echo $row['balancee'];?></td>
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