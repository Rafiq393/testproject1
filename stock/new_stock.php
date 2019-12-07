<html>
<head>
	<title>Shop</title>
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
.row{
color: yellow;
}
</style>
</head>
<body>

	
	<fieldset>
		<legend>
			<H1>Perchase Form</H1>
		</legend>
	<form method="POST" action="insert.php">
Product Code<br><br>
<input type="text" name="product_code" size="30"><br><br>
Product Name<br><br>
<input type="text" name="product_name" size="30"><br><br>
Base Cost<br><br>
<input type="text" name="base_cost" size="30"><br><br>
M.R.P<br><br>
<input type="text" name="mrp_cost" size="30"><br><br>


<input type="submit" name="submit" value="Submit Here">
</form>

</fieldset>
<a href="../ledger/form.php">Go Back</a>
	</body>
	</html>
	