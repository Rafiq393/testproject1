
<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$query = "DELETE FROM inventary WHERE id=$id";
$result=mysqli_query($connection,$query);

//redirecting to the display page (index.php in our case)
header("Location:display.php");
?>





