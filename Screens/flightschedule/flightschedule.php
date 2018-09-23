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

$flightno=$_POST['Flightno'];
$flighscheduleid=$_POST['Flightscheduleid'];
$arrivaltime=$_POST['arrivaltime'];
$departuretime=$_POST['departuretime'];
$fromcity=$_POST['fromcity'];
$tocity=$_POST['tocity'];
$doj=$_POST['doj'];
$sql="INSERT INTO flight_schedule(Flight_no,Flight_schedule_id,Dep_time,Arrival_time,From_city_code,To_city_code,Doj) 
VALUES('$flightno','$flighscheduleid','$departuretime','$arrivaltime','$fromcity','$tocity','$doj')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
