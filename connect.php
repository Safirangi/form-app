<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $semester = $_POST['semester'];
    $dept = $_POST['dept'];

//Database connection
$conn = new mysqli('localhost', 'root', '', 'test1');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into submission(firstName, lastName, email, password, semester, dept)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssis", $firstName, $lastName, $email, $password, $semester, $dept);
    $stmt->execute();
    echo "Details submission successful!";
    $stmt->close();
    $conn->close();
}

?>
