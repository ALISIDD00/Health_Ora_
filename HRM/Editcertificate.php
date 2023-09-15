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
  <h2>Edit User</h2>

  
  <form method="POST">

  <button type="submit" style="float:right; margin-left: 5px;" class="btn btn-primary">Save User</button>
  <a href="http://localhost/Health_Ora/hrm/AdminDashboard.php" style="float:right" type="button" class="btn btn-secondary">Back to List</a>
  <?php
      
      include_once "../DatabaseConfigurations/DbFucntions.php";

      $paragraph = "";
      $paragraphError = "";

      // need to get employee from database
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $result = GetDataById("certificate", $_GET["id"]);

        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        $paragraph = $row["paragraph"];
                       
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No certificate are found!</td>
                    </tr>";
                }
            }
        }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $paragraph = $_POST["paragraph"];
        

        $paragraphError = empty($paragraph) ? "Please enter paragraph!" : "";
       

        if (!empty($phoneNumber)) {
          
          $columnsArray = array(
            "paragraph" => $paragraph,
           
          );

          Update("certificate", $columnsArray, $_GET["id"]);

        }
      }

      ?>

      <div class="form-group">
        <label class="customLable">paragraph:</label>
        <input type="text" class="sr-input customWidth" id="paragraph" name="paragraph" value="<?php echo $paragraph; ?>">
        <p class="errorMessage"><?php echo $paragraphError; ?></p>
      </div>
      
  </form>
  <br><br><br><br><br><br>
</div>

<!-- end -->

<?php
  include_once "../Layouts/Admin/footer.php"
?>