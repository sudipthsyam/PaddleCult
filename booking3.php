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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paddle - Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

 <div class="wrap">
   <div class="container">
    <div class="row justify-content-between">
     <div class="col-12 col-md d-flex align-items-center">
      <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
    </div>
    <div class="col-12 col-md d-flex justify-content-md-end">
      <p class="mb-0">Mon - Fri / 9:00-21:00, Sat - Sun / 10:00-20:00</p>
      <div class="social-media">
       <p class="mb-0 d-flex">
        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
        <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
      </p>
    </div>
  </div>
</div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 <div class="container">
   <a class="navbar-brand" href="./index.php">Paddle<span>Cult</span></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
      <li class="nav-item"><a href="resort.html" class="nav-link">Resort</a></li>
      <li class="nav-item"><a href="faq.php" class="nav-link">FAQ</a></li>
      <li class="nav-item"><a href="reservation.html" class="nav-link">Reservation</a></li>
      <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
      <li class="nav-item active"><a href="contact.html" class="nav-link">Contact</a></li>
    </ul>
  </div>
</div>
</nav>
<!-- END nav -->



<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-12">
      <h2 style="color: #007bff;" class="h4 font-weight-bold">Booking Pending</h2>
      </div>
		<p>Thank you for your booking. We'd like to inform you that our payment portal is currently undergoing maintenance. As a result, we will be confirming bookings manually. You have the option to make a direct payment to us, or you can choose to pay via UPI.

We appreciate your understanding and apologize for any inconvenience this may cause. Once the payment has been successfully processed, you will receive another booking confirmation along with an invoice.</p>
       </div>
     </div>
   </div>
 </div>
</section>


<footer class="ftco-footer ftco-no-pb ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">PaddleCult</h2>
          <p>Explore the spirit of the ocean</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Open Hours</h2>
          <ul class="list-unstyled open-hours">
            <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
            <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
            <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
            <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
            <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
            <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
            <li class="d-flex"><span>Sunday</span><span> Closed</span></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Instagram</h2>
          <div class="thumb d-sm-flex">
            <a href="https://www.instagram.com/paddlecult_/" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);" target="_blank">
            </a>
            <a href="https://www.instagram.com/paddlecult_/" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);" target="_blank">
            </a>
            <a href="https://www.instagram.com/paddlecult_/" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);" target="_blank">
            </a>
          </div>
          <div class="thumb d-flex">
            <a href="https://www.instagram.com/paddlecult_/" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);" target="_blank">
            </a>
            <a href="https://www.instagram.com/paddlecult_/" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);" target="_blank">
            </a>
            <a href="https://www.instagram.com/paddlecult_/" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);" target="_blank">
            </a>
          </div>
        </div>
      </div>
      
      </div>
    </div>
  </div>
  <div class="container-fluid px-0 bg-primary py-3">
    <div class="row no-gutters">
      <div class="col-md-12 text-center">

        <p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.instagram.com/sudipth_syam/" target="_blank">Sudipth_Syam</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
</body>
</html>