<!DOCTYPE html>
<html lang="en">
<head>
  <title>PaddleCult</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="../css//owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="../css/flaticon.css">
  <link rel="stylesheet" href="../css/style.css">
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
   <a class="navbar-brand" href="../index.html">Paddle<span>Cult</span></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a href="bookingdetails.php" class="nav-link">Payment Details</a></li>
      <li class="nav-item"><a href="faqinput.php" class="nav-link">FAQ</a></li>
    </ul>
    <link rel="stylesheet" href="css/faq.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </div>
</div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_5.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center mb-5">
        <h1 class="mb-2 bread">Blog</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
      </div>
    </div>
  </div>
</section>

<table>
		
		<table>
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>booking_type</th>
        <th>checkin_data</th>
        <th>checkout_data</th>
        <th>num_guests</th>
		
		</tr>
		<?php
		$con = mysqli_connect("localhost", "root", "", "paddlecult");
		// Check connection
		if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
		}
		$sql = "SELECT name, email, booking_type, checkin_date, checkout_date, num_guests FROM bookings";
		$result = $con->query($sql);
		if (!empty($result) && $result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["booking_type"]. "</td><td>"  .$row["checkin_date"] . "</td><td>" .$row["checkout_date"] . "</td><td>".$row["num_guests"] . "</td></tr>"
				;
			}
			echo "</table>";
		}
		else {
			echo "0 result";		 
			}
		?>
		</table>
</div>
<style>
table  {
border-collapse: center;
width: 90%;
color: #000000;
font-family: monospace;
font-size: 25px;
text-align: center;
margin-top: 50px;
margin-left: auto;
margin-right: auto;
border: 1px solid rgb(84, 40, 241);
outline: none;
}


th {
background-color: #e52b34;
color: rgb(35, 35, 85);
}
nav { margin-top: -0px }
tr:nth-child(even) {background-color: #f2f2f2}

footer
{
	margin-top: 20%;
}
</style>

<footer class="ftco-footer ftco-no-pb ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 col-lg-3">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Taste.it</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
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
          <a href="#" class="thumb-menu img" style="background-image: url(../images/insta-1.jpg);">
          </a>
          <a href="#" class="thumb-menu img" style="background-image: url(../images/insta-2.jpg);">
          </a>
          <a href="#" class="thumb-menu img" style="background-image: url(../images/insta-3.jpg);">
          </a>
        </div>
        <div class="thumb d-flex">
          <a href="#" class="thumb-menu img" style="background-image: url(../images/insta-4.jpg);">
          </a>
          <a href="#" class="thumb-menu img" style="background-image: url(../images/insta-5.jpg);">
          </a>
          <a href="#" class="thumb-menu img" style="background-image: url(../images/insta-6.jpg);">
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="ftco-footer-widget mb-4">
       <h2 class="ftco-heading-2">Newsletter</h2>
       <p>Far far away, behind the word mountains, far from the countries.</p>
       <form action="#" class="subscribe-form">
        <div class="form-group">
          <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
          <input type="submit" value="Subscribe" class="form-control submit px-3">
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<div class="container-fluid px-0 bg-primary py-3">
 <div class="row no-gutters">
  <div class="col-md-12 text-center">

    <p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/jquery.timepicker.min.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../js/google-map.js"></script>
<script src="../js//main.js"></script>

</body>
</html>