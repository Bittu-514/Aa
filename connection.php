<?php  
     	$servername = "34.203.204.238";
	$username = "admin";  
       	$password = "Bbbittu";  
       	$conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
	$sql = mysql_select_db ('travel',$conn) or die("unable to connect to database");	
?>
