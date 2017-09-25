<?php

    // define database connection constance instead of using variables
	define("DB_SERVER", "localhost");
	define("DB_USER", "tammy");
	define("DB_PASS", "gvut0782");
	define("DB_NAME", "tammyLearningDB");

	// 1. Create a database connection
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

	// test if connection succeeded
	if (mysqli_connect_errno()) {
		die ("Database connection failed: ") . 
			(mysqli_connec_error() . 
			" (" . mysqli_connect_errno() . ")"
		);
	}

    $name=mysqli_real_escape_string($connection, $_GET['name']); 
    $score=mysqli_real_escape_string($connection, $_GET['score']);

    $query = "INSERT INTO scores VALUES (NULL, '$name', '$score');"; 
    $result = mysqli_query($connection, $query) or die('Query failed: ' . mysqli_error($connection)); 

?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Unity Game Testing Page</title>

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body>
    <p>The following will show data received from Unity Game:</p>
    <form id="myForm">
    </form>
</body>
-->