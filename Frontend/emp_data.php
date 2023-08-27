<?php
    $servername = "localhost";
    $username = "root";
    $password = "www+ravi2000";
    $dbname = "employeerecods";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $query = "select * from employeerecods";

    $stmt = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($stmt,MYSQLI_ASSOC)){
        echo $row['EmpName'].'</br>';
    }


    $conn->close();
    ?>