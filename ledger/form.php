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

	<div class="container two">
	<div class="container-fluid>

	<div class="row" style="font-size: 20px;">
	    <div class="col-sm-8" style="text-align: center;">
           
            <a href="../stock/new_stock.php" style="color:red;margin-left:85px;">New Stock</a>
            <a href="../stock/display.php" style="color:red;margin-left:30px;">Stock Rate List</a>

            <a href="../inventary/form.php" style="color:red;margin-left:30px;">Inventory</a>

             <a href="../inventary/display.php" style="color:red;margin-left:30px;">Available Stock</a>

	    
            <a href="display.php" style="color:red;margin-left:30px;">Available Customers</a>
            
        
              <a href="search.php" style="color:red;margin-left:30px;">Search</a>
               <a href="logout.php" style="color:red;margin-left:30px;">Log Out</a>
	    
	    </div>
		
		
	</div>

</div>
</div>
	<fieldset>
		<legend>
			<H1>Ledger</H1>
		</legend>
	<form method="POST" action="insert.php">
Account Of<br><br>
<input type="text" name="accountof" size="30"><br><br>
Pan Number<br><br>
<input type="text" name="panno" size="30"><br><br>
Tin Number<br><br>
<input type="text" name="tinno" size="30"><br><br>
Phone<br><br>
<input type="text" name="phone" size="30"><br><br>
Date<br><br>
<input type="text" name="date" size="30"><br><br>
Particulars<br><br>
<input type="text" name="cat" size="30"><br><br>
Debit<br><br>
<input type="text" name="debitt" size="30"><br><br>
Credit<br><br>
<input type="text" name="creditt" size="30"><br><br>
Balance<br><br>
<input type="text" name="balancee" size="30"><br><br>

<input type="submit" name="submit" value="Submit Here">
</form>

</fieldset>

	</body>
	</html>
	