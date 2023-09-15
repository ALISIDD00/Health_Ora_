<?php
  include_once "../Layouts/Customer/header.php"
?>


<style>

        /* Reset some default styles */


/* Basic styling */


.rr {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.sectionn {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.forcolor {
    color: #007f3f; /* Dark green */
    margin-bottom: 10px;
}

.aa {
    color: #007f3f; /* Dark green */
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.a:hover {
    color: #004c26; /* Lighter green */
}


    </style>



<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Healthconsultation</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Health Consultation</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->





    <div class="container rr">
        <section class="sectionn">
            <h2 class="forcolor">Personalized Health Assessment</h2>
            <p>Get a personalized health assessment to understand your current health status and goals.</p>
            <a class="aa" href="#contact-form">Schedule a Consultation</a>
        </section>

        <section class="sectionn">
            <h2 class="forcolor">Our Services</h2>
            <ul>
                <li><a class="aa" href="<?php echo "http://localhost/Health_Ora/Services/HealthConsultation/NutritionPlannings.php" ?>">Nutrition Planning</a></li>
                <li><a class="aa" href="<?php echo "http://localhost/Health_Ora/Services/HealthConsultation/FitnessCoaching.php" ?>">Fitness Coaching</a></li>
                <li><a class="aa" href="<?php echo "http://localhost/Health_Ora/Services/HealthConsultation/WellnessPrograms.php" ?>">Wellness Programs</a></li>
                <!-- Add more services here -->
            </ul>
        </section>

        <section class="sectionn" id="nutrition">
            <h2 class="forcolor">Nutrition Planning</h2>
            <p>Receive expert guidance on creating a balanced and nutritious meal plan.</p>
            <a class="aa" href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>">Get Started</a>
        </section>

        <section class="sectionn" id="fitness">
            <h2 class="forcolor">Fitness Coaching</h2>
            <p>Work with experienced fitness coaches to develop a personalized workout routine.</p>
            <a class="aa" href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>">Get Started</a>
        </section>

        <section class="sectionn" id="wellness">
            <h2 class="forcolor">Wellness Programs</h2>
            <p>Explore holistic wellness programs that focus on your mind, body, and spirit.</p>
            <a class="aa" href="<?php echo "http://localhost/Health_Ora/Nav/ContactUs.php" ?>">Get Started</a>
        </section>

       </div>


       <!-- start -->


  <div class="container mt-5">
    
    <form method="POST">
    <?php

include_once "../DatabaseConfigurations/DbFucntions.php";


$Name = "";
$NameError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$Name = $_POST["name"];


$NameError = empty($Name) ? "Please enter Name!" : "";


if (!empty($Name)) {



$columnsArray = array(
"name" => $Name,

);

Insert("certificate", $columnsArray);

}
}
?>
    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
    <input type="text" class="form-control" id="Name" name="name" placeholder="Name" value="<?php echo $Name; ?>">
    <p class="errorMessage"><?php echo $NameError; ?></p>
  </div>
  <input type="submit" value="click" class="btn btn-primary"></input>
    </form>
   

    <?php
    if(isset($_POST["pargraph"])){
      $pargraph = $_POST["pargraph"];
    }
    ?>
     </div>
<!-- end -->






<?php
  include_once "../Layouts/Customer/footer.php";
?>