<?php
// Connect to database
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'paddlecult';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check for errors
if(mysqli_connect_errno()) {
	die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
	);
}

// Get values from form
$question = mysqli_real_escape_string($conn, $_POST['question']);
$answer = mysqli_real_escape_string($conn, $_POST['answer']);

// Insert values into database
$sql = "INSERT INTO faq (question, answer) VALUES ('$question', '$answer')";
if(mysqli_query($conn, $sql)) {
	echo "FAQ added successfully.";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
