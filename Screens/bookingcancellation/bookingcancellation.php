

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

$bookingid=$_POST['bid'];
$custid=$_POST['custid'];
$custname=$_POST['custname'];



$pnr1=$_POST['pnr1'];
$canceldate1=$_POST['canceldate1'];
$refamt1=$_POST['refamt1'];
$sql1="INSERT INTO booking_cancellation(Booking_Id,Customer_id,PNR,Cancel_date) VALUES('$bookingid','$custid','$pnr1','$canceldate1')";
if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$pnr2=$_POST['pnr2'];
$canceldate2=$_POST['canceldate2'];
$refamt2=$_POST['refamt2'];
$sql2="INSERT INTO booking_cancellation(Booking_Id,Customer_id,PNR,Cancel_date) VALUES('$bookingid','$custid','$pnr2','$canceldate2')";
if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$pnr3=$_POST['pnr3'];
$canceldate3=$_POST['canceldate3'];
$refamt3=$_POST['refamt3'];
$sql3="INSERT INTO booking_cancellation(Booking_Id,Customer_id,PNR,Cancel_date) VALUES('$bookingid','$custid','$pnr3','$canceldate3')";


if ($conn->query($sql3) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}


$sql4="INSERT INTO payment_refund(Booking_Id,Customer_id,Date,PNR,Refund) VALUES('$bookingid','$custid','$canceldate1','$pnr1','$refamt1')";
if ($conn->query($sql4) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}
$sql5="INSERT INTO payment_refund(Booking_Id,Customer_id,Date,PNR,Refund) VALUES('$bookingid','$custid','$canceldate2','$pnr2','$refamt2')";
if ($conn->query($sql4) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql5 . "<br>" . $conn->error;
}
$sql6="INSERT INTO payment_refund(Booking_Id,Customer_id,Date,PNR,Refund) VALUES('$bookingid','$custid','$canceldate2','$pnr3','$refamt3')";
if ($conn->query($sql4) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql6 . "<br>" . $conn->error;
}
$conn->close();
?>




