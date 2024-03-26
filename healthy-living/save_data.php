<?php
// Include database connection file
include ('connect.php');


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $glucoseLevel = $_POST['glucoseLevel'];
    
    

    // SQL query to insert event data into events table
    $sql = "INSERT INTO glucose_data (Email, Date, Time, Glucose_level) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $email, $date, $time, $glucoseLevel);

    // Execute query
    if ($stmt->execute()) {
        // Event added successfully
        echo "Event added successfully.";
        header("Location: glucose_tracker.html");
    } else {
        // Error occurred while adding event
        echo "Error: " . $conn->error;
    }

    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted via POST method, redirect back to the form page
    echo "Event not added";
    
    exit;
}
?>
