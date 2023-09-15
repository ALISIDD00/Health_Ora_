
<?php
  include_once "../Layouts/Customer/header.php"
?>



  <div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <form method="POST">



      <?php

include_once "../DatabaseConfigurations/DbFucntions.php";


$Name = $email = $subject = $message = "";
$NameError = $emailError = $subjectError = $messageError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $Name = $_POST["Name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  
 

  $NameError = empty($Name) ? "Please enter Name!" : "";
  $emailError = empty($email) ? "Please enter Email!" : "";
  $subjectError = empty($subject) ? "Please enter Subject!" : "";
  $messageError = empty($message) ? "Please enter Message!" : "";

  if (!empty($Name) && !empty($email) && !empty($subject) && !empty($message)) {
    
    
    
    $columnsArray = array(
      "Name" => $Name,
      "Email" => $email,
      "subject" => $subject,
      "message" => $message,
      
     
      
    );

    Insert("contactus", $columnsArray);
  }
}
?>



        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name.." name="Name" value="<?php echo $Name; ?>">
            <p class="errorMessage"><?php echo $NameError; ?></p>
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Email.." name="email" value="<?php echo $email; ?>">
            <p class="errorMessage"><?php echo $emailError; ?></p>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" placeholder="Subject.." name="subject" value="<?php echo $subject; ?>">
            <p class="errorMessage"><?php echo $subjectError; ?></p>
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.." name="message" value="<?php echo $message; ?>"></textarea>
            <p class="errorMessage"><?php echo $messageError; ?></p>
          </div>
        </div>
        <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
      </form>
    </div>
  </div>

  

  
  
  <!-- .banner-home -->

  <?php
  include_once "../Layouts/Customer/footer.php"
?>