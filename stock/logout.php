<?php
//start a session
session_start();
//desroy the session to logout
session_destroy();
header("location:../index.php");

?>