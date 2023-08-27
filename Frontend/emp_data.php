<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employeerecods";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['location']) && isset($_POST['age']) && isset($_POST['bgroup'])) {
    $id = (int)$_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $age = (int)$_POST['age'];
    $bgroup = mysqli_real_escape_string($conn, $_POST['bgroup']);

    $sql = "INSERT INTO employeerecods.employee(EmpID, EmpName, EmpGender, EmpLocation, EmpAge, EmpBloodGroup) 
            VALUES('$id', '$name', '$gender', '$location', '$age', '$bgroup')";

if(mysqli_query($conn, $sql) === TRUE){
    echo "<script>alert('Details added'); window.location.href='userInterface.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
} else {
echo "Missing or incomplete POST data.";
}

mysqli_close($conn);
?>
