<?php
// Connect to the database
$host = 'localhost';
$username = 'u867836959_admin';
$password = 'Paddlecult@2023';
$database = 'u867836959_paddlecult';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$booking_type = $_POST['booking_type'];
$num_guests = $_POST['num_guests'];
$checkindifference = $_POST['checkindifference'];
$total = $_POST['total'];

// Validate the input data (you can add more specific validation)

    // Prepare and execute the SQL statement using prepared statements
		$sql = "INSERT INTO bookings (name, email, phone, checkin_date, checkout_date, booking_type, num_guests, checkindifference, total) 
		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$stmt = $conn->prepare($sql);

		// The type definition string must match the number of bind variables
		$stmt->bind_param("ssssssidd", $name, $email, $phone, $checkin_date, $checkout_date, $booking_type, $num_guests, $checkindifference, $total);

		if ($stmt->execute()) {
            // Email content
            $to = $email;
            $subject = "Booking Confirmation";
        
            // Read the HTML content from the external file
            $message = file_get_contents("email/index.htm");
        
            // Additional headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: support@paddlecult.com" . "\r\n";
        
            // Add CC emails
            $cc = "paddlecult@gmail.com, support@paddlecult.com";  // Add your CC email addresses here
            $headers .= "Cc: $cc" . "\r\n";
        
            // Send the email
            mail($to, $subject, $message, $headers);
        
            echo "Booking confirmed! An HTML email has been sent to $email.";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        
?>