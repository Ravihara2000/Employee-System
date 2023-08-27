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

$sql = "SELECT * FROM employeerecods.employee";
$result = mysqli_query($conn, $sql);

echo "<table id='recods'>";
echo "<tr>";

echo "<th>Employee ID</th>";
echo "<th>Employee Name</th>";
echo "<th>Employee Gender</th>";
echo "<th>Employee Location</th>";
echo "<th>Employee Age</th>";
echo "<th>Employee Blood Group</th>";

echo "</tr>";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>", $row['EmpID'], "</td>";
        echo "<td>", $row['EmpName'], "</td>";
        echo "<td>", $row['EmpGender'], "</td>";
        echo "<td>", $row['EmpLocation'], "</td>";
        echo "<td>", $row['EmpAge'], "</td>";
        echo "<td>", $row['EmpBloodGroup'], "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<tr><td colspan='6'>Empty Table</td></tr></table>";
}