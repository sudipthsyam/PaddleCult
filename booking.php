<?php
// Connect to the database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'paddlecult';
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$booking_type = $_POST['booking-type'];
$num_guests = $_POST['num_guests'];

// Insert the data into the database
$sql = "INSERT INTO bookings (name, email, checkin_date, checkout_date, booking_type, num_guests) 
        VALUES ('$name', '$email', '$checkin_date', '$checkout_date', '$booking_type', '$num_guests')";
if ($conn->query($sql) === TRUE) {
	echo "Booking successful!";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Close the database connection
$conn->close();
?>
