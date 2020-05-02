<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "error";
}
$email=$_POST['email'];
$pwd=$_POST['psw'];
$pwd1=$_POST['psw-repeat'];
$sql = "INSERT INTO 'details' (email,password) VALUES ($email,$pwd)";

if (mysqli_query($conn, $sql) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>
