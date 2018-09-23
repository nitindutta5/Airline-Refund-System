<?php
$servername = "localhost";
$username = "itbv";
$password = "itbv";
$database = "itbv";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$citycode=$_POST['citycode'];
$city=$_POST['city'];
$sql="INSERT INTO city(City_code,City_name) VALUES('$citycode','$city')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>