
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

  <script src="https://cdn.tiny.cloud/1/o9w0feb6qczyw9bhf0j2z4nlbmvzjvflm3eq8bx8ns4jdj36/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>



  
</head>
<body>

<div class="container mt-5">
<form method="POST">
     <button type="submit" style="float:right; margin-left: 5px;" class="btn btn-primary">Save</button>
<textarea id="mydesign" name=paragraph>
    Welcome to TinyMCE!
    </textarea></div>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>
  
  <?php

include_once "DatabaseConfigurations/DbFucntions.php";

$paragraph = "";
$paragraphError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
 
  $paragraph = $_POST["paragraph"];

  $paragraphError = empty($paragraph) ? "Please enter paragraph!" : "";


  if (!empty($paragraph)) {
    
    $columnsArray = array(
      
      "paragraph" => $paragraph,
    );

    Insert("blog", $columnsArray);
  }
}
?>
 
</form>


<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/js/jquery-3.5.1.min.js" ?>"></script>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/js/bootstrap.bundle.min.js" ?>"></script>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/vendor/owl-carousel/js/owl.carousel.min.js" ?>"></script>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/vendor/wow/wow.min.js" ?>"></script>

<script src="<?php echo "http://localhost/Health_Ora/Layouts/Customer/assets/js/theme.js" ?>"></script>

</body>
</html>