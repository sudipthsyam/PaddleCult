<!DOCTYPE html>
<html lang="en">
<head>
    <title>PaddleCult | Reserve Your Waves</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include Razorpay JavaScript SDK -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <!-- Your other meta tags, stylesheets, and scripts can go here -->
</head>
<body>

<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row no-gutters">
            <!-- Reservation Form Column -->
            <div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                <form class="appointment-form" method="GET" action="razorpay/pay.php">
                    <!-- Your form inputs and elements here -->
                    <!-- ... -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-white py-3 px-4">Book Your WAVE Now</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- About Column -->
            <div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
                <!-- Your about content here -->
                <!-- ... -->
            </div>
        </div>
    </div>
</section>

<!-- Razorpay Payment Integration Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".appointment-form");
    const amountField = document.getElementById("total");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        const options = {
            key: "YOUR_RAZORPAY_KEY", // Replace with your actual Razorpay API Key
            amount: parseInt(amountField.value) * 100,
            currency: "INR",
            name: "PaddleCult",
            description: "Reservation Payment",
            handler: function (response) {
                // This function will be called after successful payment
                // You can perform further actions here, like showing a success message
                console.log("Payment successful!", response);
            },
            prefill: {
                name: document.getElementById("name").value,
                email: document.getElementById("email").value,
                contact: document.getElementById("phone").value
            }
        };

        const rzp = new Razorpay(options);
        rzp.open();
    });
});
</script>

</body>
</html>
