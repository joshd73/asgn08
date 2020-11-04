<!DOCTYPE html>
<!--	Author: Josh Dettloff
		Date:	11/02/2020
		File:	add-sale-person.php
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
$empID = $_POST['empID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$userQuery = "INSERT INTO personnel (empID, firstName, lastName, jobTitle, hourlyWage) 
VALUES ($empID, $firstName, $lastName, 'sales', '8.25')"; // ADD THE QUERY

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else
{
	print("	<h1>ADD A NEW PERSONNEL RECORD</h1>");
	print ("<p>The following record was added to the personnel table:</p>");
	print("<table border='0'>
			<tr><td>EMPLOYEE ID</td><td>$empID</td></tr>
			<tr><td>FIRST NAME</td><td>$firstName</td></tr>
			<tr><td>LAST NAME</td><td>$lastName</td></tr>		
			<tr><td>JOB TITLE</td><td>sales</td></tr>
			<tr><td>HOURLY WAGE</td><td>8.25</td></tr>
			</table>");
}

mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
