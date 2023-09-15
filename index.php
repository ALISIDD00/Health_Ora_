
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Health Ora</title>

  <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/css/maicons.css" ?>">

  <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/css/bootstrap.css" ?>">

  <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/vendor/owl-carousel/css/owl.carousel.css" ?>">

  <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/vendor/animate/animate.css" ?>">

  <link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/css/theme.css" ?>">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
<style>

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}




/* sidenavstart */


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  z-index: 1000;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}




/* sidenavend */


</style>

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
 

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#" onclick="openNav()"><span class="text-primary">Health</span>-Ora</a>
        

       

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/index.php" ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/Nav/AboutUs.php" ?>">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>">Contact Us</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/feedback/remarks.php" ?>">Feed-Back</a>
            </li> 
            <li><a href="<?php echo "http://localhost/Health_Ora/loginn.php" ?>"><i class="fa fa-user"></i>Sign-In </a></li>
            


            <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h3><b>Ourspecialities</b></h3>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Articles.php" ?>">Articles</a>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Multivitamins.php" ?>">Multivitamins</a>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Receipes.php" ?>">Receipes</a>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/BMIchecker.php" ?>">BMIchecker</a>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Weightcheck.php" ?>">Bpcheck</a>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Maintenancecaloriescalculator.php" ?>">MaintenanceCaloriesCalculator</a>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/waterIntakeReminder.php" ?>">WaterIntakereminder</a>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/workoutgenerator.php" ?>">Workoutgenerator</a>

  <h3><b>Services</b></h3>
  <a href="<?php echo "http://localhost/Health_Ora/Services/Healthconsultation.php" ?>">Health Consultant</a>
  <a href="<?php echo "http://localhost/Health_Ora/Services/Nutritionplanning.php" ?>">Nutritionist</a>
  <a href="<?php echo "http://localhost/Health_Ora/Services/Fitnessprogram.php" ?>">Fitness Trainer</a>
  <a href="<?php echo "http://localhost/Health_Ora/Services/Mentalhealthcounseling.php" ?>">Therapist</a>

</div>
    
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


<!-- #region -->




  <div class="page-hero bg-image overlay-dark" style="background-image: url(Layouts/Customer/assets/img/homebg.png);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Health</span>-Ora Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Health</span>-Ora Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">your one-stop destination for all things related to health and well-being. At our website, we are committed to empowering you with the knowledge and resources needed to lead a healthier and happier life.</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/img/bg-div.png" ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


<!-- .shop-start -->

<div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Health-Ora</h1>
            <p class="text-grey mb-4">Elevate Your Life with Health Ora!</p>
            <a href="<?php echo "http://localhost/Health_Ora/shopping-cart/shop.php" ?>" class="btn btn-primary">Shop Now</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/img/best-protein-powder-in.png" ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>

<!-- .shop-end -->

  <br><br>

    <!-- start -->
    <div class="page-section bg-light">

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
    <?php
    
    
            
    include_once "DatabaseConfigurations/Lists.php";
    
    PrepareLatestaList();
?>
    </div>
    <div class="col-sm-4">
    <?php
    
    
            
    include_once "DatabaseConfigurations/Lists.php";
    
    PrepareLatestbList();
?><br><br><br>
  <a href="<?php echo "http://localhost/Health_Ora/Latestnews.php" ?>" class="btn btn-primary">Read More</a>
    </div>
    <div class="col-sm-4">
    <?php
    
    
            
    include_once "DatabaseConfigurations/Lists.php";
    
    PrepareLatestcList();
?>


    </div>
  </div>
  
</div>

</div>

<!-- end -->



<!-- .post-start -->
<div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-lg-12 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/img/chart.jpeg" ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
<!-- .post-end -->



 <!-- #faq -->

<!-- #endfaq -->




  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Services</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/img/h1.jpeg" ?>" alt="">
              <div class="meta">
                <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>"><span class="mai-call"></span></a>
                <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Health Consultation</p>
              <!-- <span class="text-sm text-grey">Cardiology</span> -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/img/n2.jpeg" ?>" alt="">
              <div class="meta">
                <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>"><span class="mai-call"></span></a>
                <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Nutrition Planning</p>
              <!-- <span class="text-sm text-grey">Dental</span> -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/img/f3.jpeg" ?>" alt="">
              <div class="meta">
                <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>"><span class="mai-call"></span></a>
                <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Fitnesss Program</p>
              <!-- <span class="text-sm text-grey">General Health</span> -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/img/t4.jpeg" ?>" alt="">
              <div class="meta">
                <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>"><span class="mai-call"></span></a>
                <a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Mental Health</p>
              <!-- <span class="text-sm text-grey">General Health</span> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form method="POST">


      <?php

include_once "DatabaseConfigurations/DbFucntions.php";


$Name = $email = $phonenumber = $message = $services = $date = "";
$NameError = $emailError = $phonenumberError = $messageError =  $servicesError = $dateError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $Name = $_POST["name"];
  $email = $_POST["email"];
  $phonenumber = $_POST["phonenumber"];
  $message = $_POST["message"];
  $services = $_POST["services"];
  $date = $_POST["date"];
 
  
 

  $NameError = empty($Name) ? "Please enter Name!" : "";
  $emailError = empty($email) ? "Please enter Email!" : "";
  $phonenumberError = empty($phonenumber) ? "Please enter phonenumber!" : "";
  $messageError = empty($message) ? "Please enter Message!" : "";
  $servicesError = empty($services) ? "Please enter services!" : "";
  $dateError = empty($date) ? "Please enter date!" : "";
 

  if (!empty($Name) && !empty($email) && !empty($phonenumber) && !empty($message) && !empty($services) && !empty($date)) {
    
    
    
    $columnsArray = array(
      "name" => $Name,
      "email" => $email,
      "phonenumber" => $phonenumber,
      "message" => $message,
      "services	" => $services,
      "date	" => $date,
    
      
     
      
    );

    Insert("appointment_form", $columnsArray);
   
  }
}
?>



        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" id="Name" name="name" placeholder="Name" value="<?php echo $Name; ?>">
            <p class="errorMessage"><?php echo $NameError; ?></p>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email address.." value="<?php echo $email; ?>">
            <p class="errorMessage"><?php echo $emailError; ?></p>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="date" value="<?php echo $date; ?>">
            <p class="errorMessage"><?php echo $dateError; ?></p>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="services" id="services" class="custom-select" value="<?php echo $services; ?>">
            <p class="errorMessage"><?php echo $servicesError; ?></p>
              <option value="healthconsultant" id="healthconsultant">healthconsultant</option>
              <option value="nutritionist" id="nutritionist">nutritionist</option>
              <option value="fitnesstrainer" id="fitnesstrainer">fitnesstrainer</option>
              <option value="therapist" id="therapist">therapist</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="Number.." value="<?php echo $phonenumber; ?>">
            <p class="errorMessage"><?php echo $phonenumberError; ?></p>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." value="<?php echo $message; ?>"></textarea>
            <p class="errorMessage"><?php echo $messageError; ?></p>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

  <!-- .banner-home -->






<!-- #region -->


  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



</div> <!-- .banner-home -->

<footer class="page-footer">
  <div class="container">
    <div class="row px-md-3">
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>Company</h5>
        <ul class="footer-menu">
          <li><a href="<?php echo "http://localhost/Health_Ora/Nav/AboutUS.php" ?>">About Us</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>More</h5>
        <ul class="footer-menu">
          <li><a href="#">Terms & Condition</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Join us</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>Our partner</h5>
        <ul class="footer-menu">
          <li><a href="#">One-Fitness</a></li>
          <li><a href="#">One-Drugs</a></li>
          <li><a href="#">One-Live</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>Contact</h5>
        <a href="#" class="footer-link">Health-Ora@temporary.net</a>
        <li><a href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>">Contact Us</a></li>
        

        <h5 class="mt-3">Social Media</h5>
        <div class="footer-sosmed mt-3">
          <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
          <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
        </div>
      </div>
    </div>

    <hr>

    <p id="copyright">Copyright &copy; 2023 <a href="https://macodeid.com/" target="_blank">Health-Ora</a>. All right reserved</p>
  </div>
</footer>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/js/jquery-3.5.1.min.js" ?>"></script>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/js/bootstrap.bundle.min.js" ?>"></script>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/vendor/owl-carousel/js/owl.carousel.min.js" ?>"></script>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/vendor/wow/wow.min.js" ?>"></script>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/js/theme.js" ?>"></script>

</body>
</html>