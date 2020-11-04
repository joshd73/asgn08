<!DOCTYPE html>
<!--	Author: Josh Dettloff
		Date:	11/02/2020
		File:	wage-report.php
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

$hourlyWage = $_POST['hourlyWage'];
$jobTitle = $_POST['jobTitle'];

$userQuery = "SELECT * FROM personnel WHERE hourlyWage='$hourlyWage' OR hourlyWage>'$hourlyWage' AND jobTitle='$jobTitle'"; // ADD THE QUERY

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>RESULTS</h1>");
	print("<p>The following employees have the $jobTitle job title, and an hourly wage of $".
			number_format($hourlyWage, 2)." or higher:</p>");
			
	print("<table border = \"1\">");
	print("<tr><th>EMP ID</th></tr>");

	// ADD CODE HERE
	while ($row = mysqli_fetch_assoc($result))
	{
		print ("<tr><td>".$row['empID'].
			"</td></tr>");
	}

	print ("</table>");
}

mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
