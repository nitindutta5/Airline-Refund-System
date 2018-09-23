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
$bookingid=$_POST['bookingid'];
$flightscid=$_POST['flightscid'];
$deptime=$_POST['departuretime'];
$arrtime=$_POST['arrivaltime'];
$fromcity=$_POST['fromcity'];
$tocity=$_POST['tocity'];
$custid=$_POST['custid'];
$custname=$_POST['custname'];
$totalamt=$_POST['totalamt'];

$sql="INSERT INTO booking
(Booking_id,Flight_schedule_id,Customer_id,Total_amt,Dep_time,Arrival_time,From_city_code,To_city_code,Customer_name)
VALUES('$bookingid','$flightscid','$custid','$totalamt','$deptime','$arrtime','$fromcity','$tocity','$custname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$bookingid1=$_POST['booking1'];
$pnr1=$_POST['pnr1'];
$name1=$_POST['name1'];
$age1=$_POST['age1'];
$gender1=$_POST['gender1'];
$amt1=$_POST['amt1'];

$bookingid2=$_POST['booking2'];
$pnr2=$_POST['pnr2'];
$name2=$_POST['name2'];
$age2=$_POST['age2'];
$gender2=$_POST['gender2'];
$amt2=$_POST['amt2'];

$bookingid3=$_POST['booking3'];
$pnr3=$_POST['pnr3'];
$name3=$_POST['name3'];
$age3=$_POST['age3'];
$gender3=$_POST['gender3'];
$amt3=$_POST['amt3'];

$sql1="INSERT INTO passenger
(PNR,Booking_id,Passenger_name,Passenger_age,Passenger_gender,Ticket_amt)
VALUES('$pnr1','$bookingid1','$name1','$age1','$gender1','$amt1')";

$sql2="INSERT INTO passenger
(PNR,Booking_id,Passenger_name,Passenger_age,Passenger_gender,Ticket_amt)
VALUES('$pnr2','$bookingid2','$name2','$age2','$gender2','$amt2')";

$sql3="INSERT INTO passenger
(PNR,Booking_id,Passenger_name,Passenger_age,Passenger_gender,Ticket_amt)
VALUES('$pnr3','$bookingid3','$name3','$age3','$gender3','$amt3')";
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}

$conn->close();
?>
?>