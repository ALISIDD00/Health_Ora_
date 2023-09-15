<?php 

   if (!isset($_COOKIE["username"])) {
      header("Location:http://localhost/Health_Ora/loginn.php");
   }

?>

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
              <a class="nav-link" href="<?php echo "http://localhost/Health_Ora/home.php" ?>">Home</a>
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
            <li><a href="<?php echo "http://localhost/Health_Ora/LogOutScript.php" ?>"><i class="fa fa-sign-out"></i>Log-Out</a></li>


            <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <h3><b>Ourspecialities</b></h3>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Articles.php" ?>">Articles</a>
  <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/FitnessCoaching.php" ?>">FitnessCoaching</a>
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

   <!-- .page-section -->

   

   <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>