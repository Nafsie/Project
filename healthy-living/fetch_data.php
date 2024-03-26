<?php
include 'connect.php';
// Retrieve user's email from the form
$email = $_POST['email'];

// SQL query to fetch past medication data for the user
$sql = "SELECT medicine_name, Time FROM medications WHERE email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["medicine_name"]. "</td><td>" . $row["Time"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
