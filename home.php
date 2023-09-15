<?php
include_once "Layouts/Customer/header.php"
?>


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
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Health-Ora</h1>
            <p class="text-grey mb-4">Write your articles here according to your preference!</p>
            <a href="<?php echo "http://localhost/Health_Ora/tinypractice.php" ?>" class="btn btn-primary">Click Here</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
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


<?php
include_once "Layouts/Customer/footer.php"
?>

