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
$id=$_POST['custid'];
$name=$_POST['custname'];
$no=$_POST['phoneno'];
$email=$_POST['email'];
$sql = "INSERT INTO customer (Cust_id, Cust_name, Cust_phone_no, Cust_email)
VALUES ('$id','$name','$no','$email' )";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>