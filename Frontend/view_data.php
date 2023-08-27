<!DOCTYPE html>
<head>
<h2><center>EMPLOYEE DATA</center></h2>
    <link rel="stylesheet" href="view_data.css" />
</head>
<body>
    
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeerecods";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}