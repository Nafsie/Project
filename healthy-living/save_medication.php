<?php

include 'connect.php';

// Retrieve form data
$Date = $_POST['Date'];
$unixTimestamp = strtotime($Date); // Convert string date to Unix timestamp
$f = date('Y-m-d', $unixTimestamp); // Format Unix timestamp as YYYY-MM-DD
$medicine_name = $_POST['medicine_name'];
$Time = $_POST['Time'];
$email=$_POST['email'];
//var_dump($f);
//var_dump($Time);
//die();


// SQL query to insert data into the database
$sql = "INSERT INTO medications (email, medicine_name, Time, Date) VALUES ('$email', '$medicine_name','$Time','$Date')";

if ($conn->query($sql) === TRUE) {
    echo "Medication logged successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
