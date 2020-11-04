<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	delete-employee.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php

$server = "localhost";
$user = "wbip";
$pw = "wbip123";
$db = "test";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

$empID = '99999'; /// CHANGE THIS TO THE ID OF THE RECORD YOU WISH TO DELETE

$userQuery = "DELETE FROM personnel WHERE empID='$empID'";

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else
{
	print("	<h1>DELETE A RECORD</h1>");
	print ("<p>The record with ID $empID was deleted.</p>");
}
mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
