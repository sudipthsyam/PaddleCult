<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin_date = $_POST['checkin_date'];
$checkout_date = $_POST['checkout_date'];
$booking_type = $_POST['booking_type'];
$num_guests = $_POST['num_guests'];
$checkindifference = $_POST['checkindifference'];
$room_type = $_POST['room_type'];
$individual_price = $_POST['individual_price'];
$pricing_unit = $_POST['pricing_unit'];
$rate = $get['rate'];
$total = $rate * $checkindifference;

// Debugging: Check if data is received
var_dump($_POST);
error_reporting(E_ALL);



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

  <link rel="stylesheet" href="../css/animate.css">
  
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">

  
  <link rel="stylesheet" href="../css/flaticon.css">
  <link rel="stylesheet" href="style2.css">
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

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled sleep awake" id="ftco-navbar">
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

<div class="test">
  <div class="model">
    <div class="room">
      <div class="text-cover">
        <h1 style="color: white;"><?php echo isset($_POST['room_type']) ? $_POST['room_type'] : (isset($_POST['booking_type']) ? $_POST['booking_type'] : ''); ?></h1>
        <p class="price"> <?php echo $_GET['rate']; ?> <span>INR</span> / Night</p>
        <hr>
        <p>Booking for <?php echo $num_guests; ?> guest</p>
        <p id ="formatted_dates">Tues, Oct 2, 2017 to Friday, Oct 5, 2017</p>
        <script>
// Assuming you have the check-in and check-out date strings
var checkin_date = "<?php echo $checkin_date; ?>";
var checkout_date = "<?php echo $checkout_date; ?>";

// Function to validate date strings
function isValidDate(dateString) {
  // Adjust the regular expression to match your date format "DD/MM/YYYY"
  var regEx = /^(\d{2})\/(\d{2})\/(\d{4})$/;
  return regEx.test(dateString);
}

if (isValidDate(checkin_date) && isValidDate(checkout_date)) {
  function formatDate(dateString) {
    // Parse the date string in your format "DD/MM/YYYY"
    var parts = dateString.split('/');
    var day = parts[0];
    var month = parts[1] - 1; // Subtract 1 since months are 0-based
    var year = parts[2];
    
    const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };
    const date = new Date(year, month, day);
    return date.toLocaleDateString('en-US', options);
  }

  var formattedCheckin = formatDate(checkin_date);
  var formattedCheckout = formatDate(checkout_date);

  var formattedDates = `${formattedCheckin} to ${formattedCheckout}`;

  // Display the formatted dates in the <p> tag with the id "formatted_dates"
  var formattedDatesElement = document.getElementById('formatted_dates');
  formattedDatesElement.innerHTML = `<p>${formattedDates}</p>`;
} else {
  // Display an error message if the date strings are not valid
  var formattedDatesElement = document.getElementById('formatted_dates');
  formattedDatesElement.innerHTML = "<p>Invalid Date</p>";
}
</script>
      </div>
      
    </div><div class="payment">
      <div class="receipt-box">
        <h3>Reciept Summary</h3>
        <table class="table">
          <tr>
            <td><?php echo $rate; ?> x <?php echo $num_guests; ?> </td>
            <td><?php echo $total; ?> INR</td>
          </tr>
          <tr>
            <td>Discount</td>
            <td>0 INR</td>
          </tr>
          <tr>
            <td>Subtotal</td>
            <td><?php echo $total; ?></td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>0 INR</td>
          </tr>
          <tfoot>
            <tr>
              <td>Sum</td>
              <td><?php echo $total; ?> INR</td>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="payment-info">
        <h3>Payment Info</h3>
        <form>
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>" id="name"  >
        <label>Email </label>
        <input type="text" name="email"  value="<?php echo $email; ?>" id="email" >
        <label>Phone Number</label>
        <input type="text" name="phone"  value="<?php echo $phone; ?>" id="phone"> 
        <label>Room Type</label>
        <input type="text" name="room_type"  value="<?php echo $_GET['room_type']; ?> " id="room_type" readonly> 
        <label>Check-in Date</label>
        <input type="text" class="form-control" placeholder="Check-Out" id="checkout_date" name="checkout_date" required> 
        <label>check-out Date</label>
        <input type="text" name="checkout_date"  value="<?php echo $checkout_date; ?>" id="checkout_date"> 
        <label>Number of Rooms</label>
        <input type="text" name="num_rooms"  value="<?php echo $checkout_date; ?>" id="num_rooms"> 
        <!-- jQuery and jQuery UI JS -->
        // Load jQuery and jQuery UI from the same source.
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
              <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
              <script>// Initialize the datepickers.
              $(document).ready(function() {
                var minDate = new Date();

                $("#checkin_date").datepicker({
                  dateFormat: "dd/mm/yy",
                  minDate: minDate,
                  changeMonth: true,
                  changeYear: true,
                  onClose: function(selectedDate) {
                    $("#checkout_date").datepicker("option", "minDate", selectedDate);
                  }
                });

                $("#checkout_date").datepicker({
                  dateFormat: "dd/mm/yy",
                  minDate: minDate + 1,
                  changeMonth: true,
                  changeYear: true
                });
              });</script>


								</script>
								<style>
									.ui-datepicker {
									width: 280px;
									height: 340px;
									border-radius: 0;
									overflow: hidden;
									font-family: Arial, sans-serif;
								}
							
								.ui-datepicker .ui-datepicker-header {
									height: 40px;
									display: flex;
									align-items: center;
									justify-content: space-between;
								}
							
								.ui-datepicker th {
									padding: 0.2em;
									text-align: center;
									border: none;
								}
							
								.ui-datepicker td {
									padding: 0.5em;
									text-align: center;
									vertical-align: middle; /* Align the contents of the cell vertically in the middle */
								}
							
								.ui-datepicker .ui-state-default {
									border: none;
									background: none;
									color: #000;
									width: 100%;
									line-height: 2.2em;
									text-align: center;
									display: block;
									margin: 0 auto;
								}
							
								.ui-datepicker .ui-state-highlight {
									color: #ff0000;
								}
							
								.ui-datepicker .ui-state-active {
									background-color: #000;
									color: #fff;
									border-radius: 50%;
									width: 24px; /* Explicitly set width */
									height: 24px; /* Explicitly set height */
									line-height: 24px; /* Match line height with height */
									display: block;
									margin: 0 auto; /* Auto margins to center block level elements */
								}
							
								.ui-datepicker select.ui-datepicker-month,
								.ui-datepicker select.ui-datepicker-year {
									width: 45%;
									border-radius: 0;
								}
								/* Styling for the datepicker dropdowns */
								.ui-datepicker select.ui-datepicker-month, 
								.ui-datepicker select.ui-datepicker-year {
									width: 45%;
									padding: 5px;
									border: 1px solid #aaa; 
									border-radius: 4px;
									background-color: #f8f8f8;
									font-size: 14px;
									color: #333;
									outline: none; /* Remove the default outline */
									margin: 0 2px; 
								}
							
								.ui-datepicker select.ui-datepicker-month:hover, 
								.ui-datepicker select.ui-datepicker-year:hover {
									background-color: #eaeaea; /* Change background on hover */
								}
							
								.ui-datepicker select.ui-datepicker-month:focus, 
								.ui-datepicker select.ui-datepicker-year:focus {
									border-color: #666; /* Highlight border on focus */
								}
							
								.year-box, .month-box {
								display: inline-block;
								padding: 10px;
								border: 1px solid #ccc;
								cursor: pointer;
								margin: 5px;
								border-radius: 4px;
								background-color: #f8f8f8;
								text-align: center;
								width: 50px;  // Fixed width for consistent appearance
							}
							
							.year-box:hover, .month-box:hover {
								background-color: #e0e0e0;
							}
							
							
							.ui-datepicker select.ui-datepicker-month,
							.ui-datepicker select.ui-datepicker-year {
								background-color: #f6f6f6;
								border: 1px solid #ccc;
								color: #333;
								padding: 4px 8px;
								font-size: 1em;
								margin: 1px;
								width: auto;
							}
							
							.ui-datepicker select.ui-datepicker-year {
								width: 100px; /* Adjust this value based on your preference */
							}
							
							.ui-datepicker select.ui-datepicker-year option:selected {
								background-color: black;
								color: white;
							}
							
							
									/* Change the highlight color for the selected option */
									.ui-datepicker select.ui-datepicker-year option:checked,
									.ui-datepicker select.ui-datepicker-month option:checked {
										background-color: black;
										color: white;
									}
							
									/* This is to provide the desired appearance for options on some browsers */
									.ui-datepicker select.ui-datepicker-year:focus option:hover,
									.ui-datepicker select.ui-datepicker-month:focus option:hover {
										background-color: black;
										color: white;
									}
								</style>
         
        <br><br>
        <input class="btn" type="submit" value="Book Securly">
      </form>
      </div>
    </div>
  </div>
</body>
<style>* {
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
  font-size: 18px;
  /*   border: 1px solid black; */
  margin: 0;
  padding: 0;
}

.test {
  margin: 0;
  padding: 10% 0;
  position: relative;
  min-height: 100vh;
  background: #34495e;
  display: flex;
  justify-content: center;
  animation: fadein 5s;
  animation-fill-mode: forwards;
}

.fadeIn {
  animation: fadein 5s;
  animation-fill-mode: forwards;
}

@keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

label {
  display: block;
}
/* Model Container */

.model {
  width: 900px;
  height: 1300px;
  background: white;
  /*   font-size: 0; */
  color: white;
  position: relative;
  /*   animation: slideInFromLeft 1s cubic-bezier(0.68, -0.55, 0.265, 1.55); */
  animation-fill-mode: forwards;
}

.model:after {
  
  background-color: #bdc3c7;
}

@keyframes slideInFromLeft {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

.room {
  width: 50%;
  height: 100%;
  background: url(https://images.unsplash.com/photo-1470274038469-958113db2384?auto=format&fit=crop&w=1875&q=80)
    no-repeat center center;
  background-size: cover;
  display: inline-block;
  vertical-align: top;
  position: relative;
}

.text-cover {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.7);
  padding: 20px;
}

.text-cover > * {
  margin: 10px 0;
}

.text-cover h1 {
  font-size: 1.8rem;
}

.text-cover .price {
  color: #e67e22;
}

.text-cover .price span {
  font-size: 1.4rem;
  font-weight: 700;
}

.payment {
  width: 50%;
  height: 100%;
  color: #34495e;
  display: inline-block;
}

.receipt-box {
  padding: 20px 20px;
  border-bottom: 1px solid #34495e;
}

.receipt-box h3,
.payment-info h3 {
  margin-bottom: 2rem;
}

.payment-info {
  padding: 20px;
}

input[type="text"] {
  width: 100%;
  padding: 8px 10px 10px;
  margin: 15px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.btn {
  padding: 15px 25px;
  border: none;
  color: white;
  width: 100%;
  display: block;
  background: #9b59b6;
  text-transform: uppercase;
}

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}

.table td {
  font-size: 0.8rem;
  font-style: italic;
  padding: 0.25rem;
  vertical-align: top;
}

.table td:nth-child(2) {
  text-align: right;
}

/* CSS for responsiveness */

/* For screens up to 768px width, stack the room and payment sections */
@media (max-width: 768px) {
  .model {
    width: 100%; /* Make the model container full width */
  }

  .room {
    width: 100%; /* Make the room take full width on mobile */
    height: auto; /* Allow the room height to adjust based on content */
  }

  .text-cover {
    position: static; /* Remove the absolute positioning */
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
  }

  .payment {
    width: 100%; /* Make the payment container full width */
  }

  .receipt-box {
    padding: 20px 20px;
    border-bottom: 1px solid #34495e;
  }

  /* Adjust the text boxes for smaller screens */
  input[type="text"] {
    width: 100%; /* Make the text boxes full width */
    padding: 8px 10px; /* Adjust padding for text boxes */
    margin: 10px 0; /* Adjust margin for text boxes */
  }

  /* Adjust the button for smaller screens */
  .btn {
    width: 100%; /* Make the button full width */
  }
}

/* For screens wider than 768px, revert to the original side-by-side layout */
@media (min-width: 769px) {
  .model {
    width: 900px;
  }

  .room {
    width: 50%;
    height: 100%;
  }

  .text-cover {
    position: absolute;
  }

  .payment {
    width: 50%;
  }

  .receipt-box {
    padding: 20px 20px;
    border-bottom: 1px solid #34495e;
  }

  /* Adjust the text boxes for wider screens */
  input[type="text"] {
    width: 100%; /* Make the text boxes full width */
    padding: 8px 10px 10px; /* Adjust padding for text boxes */
    margin: 15px 0; /* Adjust margin for text boxes */
  }

  /* Adjust the button for wider screens */
  .btn {
    width: 100%; /* Make the button full width */
  }
}


/* ... (existing CSS code) ... */

/* CSS for responsiveness */

/* For screens up to 768px width, stack the room and payment sections */
@media (max-width: 768px) {
  .model {
    width: 100%;
  }

  .room {
    width: 100%;
    height: auto;
  }

  .text-cover {
    position: static;
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
  }

  .payment {
    width: 100%;
  display: block; /* Adjust display for payment to stack elements */
  border-bottom: 1px solid #34495e; /* Add back the border */
  padding: 20px; /* Adjust padding for payment */
  background: white; /* Add a background color to payment */
  color: #34495e; /* Set the text color for payment */
  font-size: 18px; /* Reset font size for payment */
}

.payment-info {
  /* Adjust styling for payment info */
  padding: 20px;
}

/* Adjust the text boxes for smaller screens */
input[type="text"] {
  width: 100%;
  padding: 8px 10px;
  margin: 10px 0;
}

/* Adjust the button for smaller screens */
.btn {
  width: 100%;
}

/* For screens wider than 768px, revert to the original side-by-side layout */
@media (min-width: 769px) {
  .model {
    width: 900px;
  }

  .room {
    width: 50%;
    height: 100%;
  }

  .text-cover {
    position: absolute;
  background: rgba(0, 0, 0, 0.7);
    padding: 20px;
  }

  .payment {
    width: 50%;
    display: inline-block; /* Ensure payment-info stays inside payment */
    vertical-align: top;
    padding: 0; /* Reset padding for the payment div */
    margin: 0; /* Reset margin for the payment div */
    border-bottom: none; /* Remove the border for the payment div */
    background: white; /* Add a background color to payment div */
    color: #34495e; /* Set the text color for payment div */
    font-size: 18px; /* Reset font size for payment div */
    border-left: 1px solid #34495e; /* Add a border between room and payment */
  }

  /* Adjust the text boxes for wider screens */
  input[type="text"] {
    width: 100%;
    padding: 8px 10px 10px;
    margin: 15px 0;
  }

  /* Adjust the button for wider screens */
  .btn {
    width: 100%;
  }
}

/* ... (existing CSS code) ... */

/* Add more text boxes and adjust layout for smaller screens */
.payment {
  width: 100%;
  display: block;
  padding: 20px; /* Adjust padding for payment */
  background: white; /* Add a background color to payment */
  color: #34495e; /* Set the text color for payment */
  font-size: 18px; /* Reset font size for payment */
}

.payment-info {
  /* Adjust styling for payment info */
  padding: 20px;
  box-sizing: border-box; /* Make sure it stays within its container */
}

/* Add more text boxes and adjust styling for smaller screens */
input[type="text"] {
  width: 100%;
  padding: 8px 10px; /* Adjust padding for text boxes */
  margin: 10px 0; /* Adjust margin for text boxes */
}

/* Adjust the button for smaller screens */
.btn {
  width: 100%; /* Make the button full width */
}

/* For screens wider than 768px, revert to the original side-by-side layout */
@media (min-width: 769px) {
  .model {
    width: 900px;
  }

  .room {
    width: 50%;
    height: 100%;
  }

  .text-cover {
    position: absolute;
    background: rgba(0, 0, 0, 0.7);
    padding: 20px;
  }

  .payment {
    width: 50%;
    display: inline-block;
    vertical-align: top;
    padding: 0;
    margin: 0;
    border-bottom: none;
    background: white;
    color: #34495e;
    font-size: 18px;
    border-left: 1px solid #34495e;
  }

  /* Adjust the text boxes for wider screens */
  input[type="text"] {
    width: 100%;
    padding: 8px 10px 10px;
    margin: 15px 0;
  }

  /* Adjust the button for wider screens */
  .btn {
    width: 100%;
  }
}

</style>

<script>//https://dribbble.com/shots/2291259-Credit-Card-Checkout
//https://images.unsplash.com/photo-1507038772120-7fff76f79d79?auto=format&fit=crop&w=1867&q=80

var model = document.querySelector(".model");

function fadeIn() {
  console.log("fadein");
  model.className += " fadeIn";
}
</script>

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