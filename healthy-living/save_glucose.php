<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

// Retrieve form data
$Date = $_POST['Date'];
$unixTimestamp = strtotime($Date); // Convert string date to Unix timestamp
$f = date('Y-m-d', $unixTimestamp); // Format Unix timestamp as YYYY-MM-DD
$Glucose_level = $_POST['Glucose_level'];
$Time = $_POST['Time'];
$email=$_POST['email'];
//var_dump($f);
//var_dump($Time);
//die();


// SQL query to insert data into the database
$sql = "INSERT INTO glucose_data (Date,Glucose_level,Email,Time) VALUES ('$Date', '$Glucose_level','$email','$Time')";

if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
