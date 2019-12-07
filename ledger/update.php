<?php
include("connection.php");
$id = $_GET['id'];
$query="SELECT * FROM shoptable WHERE id='$id'";
$data=mysqli_query($connection,$query);
while($result = mysqli_fetch_assoc($data))
{
	$id = $result['id'];
	$accountof = $result['accountof'];
	$panno = $result['panno'];
	$tinno = $result['tinno'];
	$phone = $result['phone'];
	$date = $result['date'];
	$cat = $result['cat'];
	$debitt= $result['debitt'];
	$creditt = $result['creditt'];
	$balancee = $result['balancee'];
	
	
	
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
Account Of<br><br>
<input type="text" name="accountof" size="30" value="<?php echo $accountof ?>"><br><br>
Pan No<br><br>
<input type="text" name="panno" size="30" value="<?php echo $panno ?>"><br><br>
Tin Number<br><br>
<input type="text" name="tinno" size="30" value="<?php echo $tinno ?>"><br><br>
Phone<br><br>
<input type="text" name="phone" size="30" value="<?php echo $phone ?>"><br><br>
Date<br><br>
<input type="text" name="date" size="30" value="<?php echo $date ?>"><br><br>
Cat<br><br>
<input type="text" name="cat" size="30" value="<?php echo $cat ?>"><br><br>
Debit<br><br>
<input type="text" name="debitt" size="30" value="<?php echo $debitt ?>"><br><br>
Credit<br><br>
<input type="text" name="creditt" size="30" value="<?php echo $creditt ?>"><br><br>
Balance<br><br>
<input type="text" name="balancee" size="30" value="<?php echo $balancee ?>"><br><br>


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
	$accountof=$_POST['accountof'];
	
	$panno=$_POST['panno'];
	$tinno=$_POST['tinno'];

	$phone=$_POST['phone'];
	
	$date=$_POST['date'];
	$cat=$_POST['cat'];

	$debitt=$_POST['debitt'];
	
	$creditt=$_POST['creditt'];
	$balancee=$_POST['balancee'];
	
	$sql="UPDATE `shoptable` SET accountof='$accountof',panno='$panno',tinno='$tinno',phone='$phone',date='$date',cat='$cat',debitt='$debitt',creditt='$creditt',balancee='$balancee' WHERE id='$id'";
	$data=mysqli_query($connection,$sql);
	if($data)
	{
		 echo header("location:display.php");
	}else{
		echo "there is a problem";
	}
}
?>