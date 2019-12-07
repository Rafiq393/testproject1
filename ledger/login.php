
<html>
<head>
	<title>project</title>
<style>
body{
	background-color:Yellow;
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
			<H1>Login Here</H1>
		</legend>
	<form method="POST" action="login.php">
Email<br><br>
<input type="text" name="email" size="30"><br><br>
Password<br><br>
<input type="text" name="mypass" size="30"><br><br>
<input type="submit" name="submit" value="submit">
<a href="fpass.php">Forgot Pass</a>
<a href="signup.php">Signup Here</a>
</form>

</fieldset>

	</body>
	</html>
	<?php
	session_start();
include("connection.php");
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$mypass=$_POST['mypass'];
	$query="SELECT * FROM studenttb Where email='$email' && mypass='$mypass'";
	$data=mysqli_query($connection,$query);
	$total=mysqli_num_rows($data);
	if($total>0)
	{
		$_SESSION['email']=$email;
		echo header("location:sregister.php");
	}else{
		echo "Username or Password not correct";
	}
}

	?>
