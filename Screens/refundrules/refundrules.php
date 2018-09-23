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

$Ruleid=$_POST['ruleid'];
$desc=$_POST['description'];
$Returnpercentage=$_POST['returnpercentage'];
$Fromday=$_POST['fromday'];
$Today=$_POST['today'];
$sql="INSERT INTO refund_rules(Rule_id,Description,From_day,To_day,Percentage_Return)
 VALUES('$Ruleid','$desc','$Fromday','$Today','$Returnpercentage')";
 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
