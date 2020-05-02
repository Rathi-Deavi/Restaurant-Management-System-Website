<?php
 $link = mysqli_connect("localhost", "user", "", "details");
 if (mysqli_connect_errno()) {
        
        print_r(mysqli_connect_error());
        exit();
        
    }
$sql = "INSERT INTO tablename (email, password)VALUES ('email', 'password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>