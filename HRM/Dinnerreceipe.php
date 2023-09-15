<?php
  include_once "../Layouts/Admin/header.php"
?>

<style>
  .customWidth {
    width: 100% !important;
  }
  .customLable {
    color: black;
    font-weight: 700;
    margin-top: 5px;
  }
</style>

<!-- start -->

<div class="container mt-3">
  <h2>Add Dinner Recipes's</h2>

  <form method="POST">

  <button type="submit" style="float:right; margin-left: 5px;" class="btn btn-primary">Save</button>
  <a href="http://localhost/Health_Ora/hrm/Shop.php" style="float:right" type="button" class="btn btn-secondary">Back to List</a>

  <?php

include_once "../DatabaseConfigurations/DbFucntions.php";

$title = $ingredients = $instructions = $picture = "";
$titleError = $ingredientsError = $instructionsError = $pictureError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $title = $_POST["title"];
  $ingredients = $_POST["ingredients"];
  $instructions = $_POST["instructions"];
  $picture = $_POST["picture"];;
 


  $titleError = empty($title) ? "Please enter title!" : "";
  $ingredientsError = empty($ingredients) ? "Please enter ingredients!" : "";
  $instructionsError = empty($instructions) ? "Please enter instructions!" : "";
  $pictureError = empty($picture) ? "Please enter picture!" : "";

 

  if (!empty($title) && !empty($ingredients) && !empty($instructions) && !empty($picture)) {
    
    if (isset($_FILES["picture"])) {

      $temp_name = $_FILES["picture"]["tmp_name"];
      $name = $_FILES["picture"]["name"];
      $newFileName = GetNew_GUID().$name;
      $imagePath = "../UploadedImages/".$newFileName;
      move_uploaded_file($temp_name, $imagePath);
    }


    $columnsArray = array(
      "title" => $title,
      "ingredients" => $ingredients,
      "instructions" => $instructions,
      "picture" => $picture,
      

    );

    Insert("dinner_recipes", $columnsArray);
  }
}
?>

  <div class="form-group">
    <label class="customLable">Title Name:</label>
    <input type="text" placeholder="Enter title" class="sr-input customWidth" id="title" name="title" value="<?php echo $title; ?>">
    <p class="errorMessage"><?php echo $titleError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Ingredients:</label>
    <input type="text" placeholder="Enter ingredients" class="sr-input customWidth" id="ingredients" name="ingredients" value="<?php echo $ingredients; ?>">
    <p class="errorMessage"><?php echo $ingredientsError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Instructions:</label>
    <input type="text" placeholder="Enter instructions" class="sr-input customWidth" id="instructions" name="instructions" value="<?php echo $instructions; ?>">
    <p class="errorMessage"><?php echo $instructionsError; ?></p>
  </div>
  <div class="form-group">
                        <img id="user_img" height="100" width="90" style="border:solid" />
                        <input type="file" id="picture" name="picture" onchange="show(this)" />
                      </div>
                      <script>
                        function show(input) {
                            if (input.files && input.files[0]) {
                                var filerdr = new FileReader();
                                filerdr.onload = function (e) {
                                    $('#user_img').attr('src', e.target.result);
                                }
                                filerdr.readAsDataURL(input.files[0]);
                            }
                        }
                      </script>

 

  </form>
  <br><br><br><br><br><br>
</div>

 <!-- end -->

<?php
  include_once "../Layouts/Admin/footer.php"
?>