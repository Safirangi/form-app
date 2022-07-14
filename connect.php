<!DOCTYPE html>
<html>

<head>
	<title>Student Details : Display</title>
    <style>
        * {
            @import url("https://fonts.googleapis.com/css2?family=Work+Sans&display=swap");
            --font: "Work Sans", sans-serif;
            font-family: var(--font);
        }
    </style>
</head>

<body>
	<center>
<?php

// servername -> localhost
// username -> root
// password -> empty
// database name -> student-details
// port number -> 3307
// table name -> details
$conn = new mysqli('localhost', 'root', 'password', 'student-details', 3307);

//Database connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $semester = $_POST['semester'];
    $dept = $_POST['dept'];

//Insert query execution
//Table name is details
$sql = "INSERT INTO details VALUES ('$firstName', '$lastName','$email','$password','$semester', '$dept')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\nFirst Name: $firstName\n Last Name: $lastName\n "
        . "Email: $email\n Semester: $semester\n Department: $dept\n");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

</center>
</body>

</html>
