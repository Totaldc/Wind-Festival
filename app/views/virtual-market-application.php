

<?php
//irasymas i faila
$note = fopen("../../application_data.txt", "a+") or die("Unable to open"); //kur irasyti
$txt = $_POST['user_name'] . ' ' . $_POST['lName'] . ' ' . $_POST['email'] .  "\n"; //ka irasyti
fwrite($note, $txt);
fclose($note);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
<header>
    <div class="container">
        <div class="row justify-content-between p-3">
            <span>WIND FESTIVAL FOR THE ARTS</span>
            <nav>
                <a href="virtual-market-application.php">VIRTUAL MARKET APPLICATION</a>
                <a href="#">SPONSORS</a>
            </nav>
        </div>
    </div>
</header>
<!-- end of header nav -->
<section>
    <div class="container mt-5">
        <div>
            <h3 class="font-weight-normal mb-5">Virtual Market Vendor Application Form</h3>
            <p>Join us for an  all day virtual shopping experience where shoppers will be able to visit our website, browse our vendor lineup and shop all the goods from the  comfort of their own home. In addition to being featured on our online vendor lineup, there is opportunity to do live demos, workshops and studio tours hosted either  through Instagram Live or IGTV platforms.</p>
            <p>Since we aren't able to host the market in person this is a new event to engage shoppers who love to support local makers and shops!</p>
            <p>The 2020 Wind Festival for the Arts is looking for artisans and vendors to participate in a Virtual Market! Applicants will be informed of their acceptance upon committee review and the fee must be paid upon acceptance to secure your spot.</p>
            <p><span class="font-weight-bold">Vendor Dates:</span> Sat, Aug 8, 2020</p>
            <p><span class="font-weight-bold"> Time of event:</span> 10:00 am - 4:00 pm</p>
            <p><span class="font-weight-bold">Cost to vendors:</span> $50* </p>
            <p class="font-italic mb-5">*Please pay fee at bottom of page after you have received approval from SAC.</p>
            <a class="button" href="#">TERMS & CONDITIONS</a>
        </div>
    </div>
</section>
<!-- end of first section -->
<section class="mt-5">
    <div class="container">
        <div class="column justify-content-around">
            <div class="col-12"> 
                <h5>ARTISAN VENDOR APPLICATION </h5>
            </div>
            <form action="" method="post" class="column af">
                <div class="d-flex justify-content-center text-center mt-5">
                    <div class="col-6">
                        <input type="text" name="user_name" placeholder="Name">
                    </div>
                    <div class="col-6">
                        <input type="text" name="lName" placeholder="Last name">
                    </div>
                </div>
                <div class="column justify-content-center text-center">
                <div class="col-12 mt-5">
                        <input type="email" name="email" placeholder="Email Address*">
                </div>
                <div class="col-12 mt-5">
                        <input type="text" name="b-name" placeholder="Bussiness Name*">
                </div>
                <div class="col-3 mt-5">
                        <input type="phone" name="phone" placeholder="Phone Number*">
                </div>
                <div class="col-12 mt-5">
                        <textarea name="handles" id="handles" cols="30" rows="5">Social Media Accounts or Handles *</textarea>
                </div>
                <div class="col-12 mt-5">
                        <textarea name="services" id="services" cols="30" rows="5">Please briefly describe your products and/or services *</textarea>
                </div>
                </div>
                <h5 class="mt-3">Terms & Conditions *</h5>
                    
                    <div class="d-flex check mt-5">
                    <input type="checkbox" id="check" name="check" value=">I acknowledge that I've read and agree to the terms and conditions.">
                    <p>I acknowledge that I've read and agree to the terms and conditions.</p>
                    </div>
               
                <div class="check-and-sub">
                <input class="sub-button mt-5" type="submit">
            </div>
            </form>
        </div>
    </div>
</section>
<!-- end of form section -->
<section class="mb-5">
    <div class="container mt-5 b-border mb-5">
        <div class="d-flex justify-conetent-center text-center">
            <div class="b-border">
                <h6>Please pay for vendor fees below AFTER your vendor application has been approved by a member of the Wind Festival for the Arts team. </h6>
                <h6 class="mt-3 mb-5">A member of the team will be in touch shortly after you've submitted your application above.</h6>
            </div>
        </div>
        <div class="d-flex">
        <div class="left col-6  mb-5">
            <img class="mt-5" src="../../assets/images/box-img.jpg" alt="" width="510px" height="340px">
        </div>
        <div class="right col-6 mt-5 mb-5 ">
            <a class="vendor-link" href="#">Vendor Application Fees</a>
            <p class="fee">$50.00 CAD</p>
            <p class="text-muted">Vendor fees for the 2020 Wind Festival for the Arts. Please add to cart to purchase and confirm your vendor spot after receiving approval of your application from our team.</p>
            <p class="text-muted">Quantity:</p>
            <input class="num-input" type="number">
            <div class="mt-3">
            <a href="#" class="sub-button2">Purchase</a>
            </div>

        </div>
    </div>
    </div>
</section>
<!-- end of section -->
<section>
    <div class="container">
        <div class="column justify-content-center">
            <p class="text-center text-muted col-12 mt-3 mb-3">37950 Cleveland Ave, Squamish BC, Canada 	&nbsp;	&nbsp;   info@squamishartscouncil.com</p>
            <div class="text-center">
            <img src="../../assets/images/bottom-logo.jpg" alt="bottom logo">
            </div>
        </div>
        <div class="row justify-content-center b-nav">
            <a href="#">CONTACT</a>
            <a href="#">INSTAGRAM</a>
            <a href="#">FACEBOOK</a>
            <a href="#">TWITTER</a>
            <a href="#">SQUOMISH ART COUNCIL</a>
        </div>
        <div class="d-flex justify-content-center">
            <div class="contactForm p-4 text-center">
                    <h2 class="mt-2">SUBSCRIBE</h2>
                    <P class="font-weight-light">Sign up with your email address to receive news and updates from the Wind Festival & Squamish Arts Council.</P>
                    <form action="" method="post" class="">
                        <input type="text" name="user_name" placeholder="First name">
                        <input type="text" name="lName" placeholder="Last name">
                        <input type="email" name="email" placeholder="Email address:">
                        <input type="submit" placeholder="Sign Up">
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5">
                    <div class="mt-4">
                        <a class="last-a" href="#">DONATE TO SUPORT LOCAL ARTS</a>
                    </div>
                </div>
    </div>
</section>

    
<script type="text/javascript" src="../../assets/js/jquery.js"></script>
<script type="text/javascript" src="../../assets/js/bootstrap.bundle.js"></script>
</body>
</html>