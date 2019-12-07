
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
$query="SELECT * FROM shoptable";
$data=mysqli_query($connection,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
//echo $result['name'].''.$result['lname'];
if($total !=0)
{
?>
<table width="70%" height="40" border="3" align="center" style="margin-top: 40px;">
	<h2 align="center" color="#f7fefd" >Customer  Details Gets Displayed Here</h2>
	<tr width="20" height="5">
		<tr ><th colspan="12"><h1>ABD Enterprises</h1></th></tr>
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
		<td>Update</td>
		<td>Delete</td>
	
		
		
		
	</tr>

<?php
while($result=mysqli_fetch_assoc($data))
{
	echo "<tr>
		<td>".$result['id']."</td>
		<td>".$result['accountof']."</td>
		<td>".$result['panno']."</td>
		<td>".$result['tinno']."</td>
		<td>".$result['phone']."</td>
		<td>".$result['date']."</td>
		<td>".$result['cat']."</td>
		<td>".$result['debitt']."</td>
		<td>".$result['creditt']."</td>
		<td>".$result['balancee']."</td>
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
