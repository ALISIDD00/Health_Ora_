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
  <h2>Create User</h2>

  <form method="POST">

  <button type="submit" style="float:right; margin-left: 5px;" class="btn btn-primary">Save User</button>
  <a href="http://localhost/Health_Ora/hrm/AdminDashboard.php" style="float:right" type="button" class="btn btn-secondary">Back to List</a>

  <?php

include_once "../DatabaseConfigurations/DbFucntions.php";

$firstName = $lastName = $email = $password = $cnic = $address = $phoneNumber = "";
$firstNameError = $lastNameError = $emailError = $passwordError = $cnicError = $addressError = $phoneNumberError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $firstName = $_POST["FirstName"];
  $lastName = $_POST["LastName"];
  $phoneNumber = $_POST["PhoneNumber"];
  $password = $_POST["Password"];
  $cnic = $_POST["CNIC"];
  $email = $_POST["Email"];
  $address = $_POST["Address"];
  $roleId = $_POST["RoleId"];

  $firstNameError = empty($firstName) ? "Please enter First Name!" : "";
  $lastNameError = empty($lastName) ? "Please enter Last Name!" : "";
  $emailError = empty($email) ? "Please enter Email!" : "";
  $passwordError = empty($password) ? "Please enter Password!" : "";
  $cnicError = empty($cnic) ? "Please enter CNIC!" : "";
  $addressError = empty($address) ? "Please enter Address!" : "";
  $phoneNumberError = empty($phoneNumber) ? "Please enter Phone Number!" : "";

  if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password) && !empty($cnic) && !empty($address) && !empty($phoneNumber)) {
    
    $columnsArray = array(
      "FirstName" => $firstName,
      "LastName" => $lastName,
      "PhoneNumber" => $phoneNumber,
      "Password" => $password,
      "CNIC" => $cnic,
      "Email" => $email,
      "Address" => $address,
      "RoleId" => $roleId
    );

    Insert("Employee", $columnsArray);
  }
}
?>

  <div class="form-group">
    <label class="customLable">First Name:</label>
    <input type="text" class="sr-input customWidth" id="FirstName" name="FirstName" value="<?php echo $firstName; ?>">
    <p class="errorMessage"><?php echo $firstNameError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Last Name:</label>
    <input type="text" class="sr-input customWidth" id="LastName" name="LastName" value="<?php echo $lastName; ?>">
    <p class="errorMessage"><?php echo $lastNameError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">CNIC:</label>
    <input type="text" class="sr-input customWidth" id="CNIC" name="CNIC" value="<?php echo $cnic; ?>">
    <p class="errorMessage"><?php echo $cnicError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Email:</label>
    <input type="email" class="sr-input customWidth" id="Email" name="Email" value="<?php echo $email; ?>">
    <p class="errorMessage"><?php echo $emailError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Password:</label>
    <input type="password" class="sr-input customWidth" id="Password" name="Password" value="<?php echo $password; ?>">
    <p class="errorMessage"><?php echo $passwordError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Phone Number:</label>
    <input type="text" class="sr-input customWidth" id="PhoneNumber" name="PhoneNumber" value="<?php echo $phoneNumber; ?>">
    <p class="errorMessage"><?php echo $phoneNumberError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Address:</label>
    <input type="text" class="sr-input customWidth" id="Address" name="Address" value="<?php echo $address; ?>">
    <p class="errorMessage"><?php echo $addressError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Role:</label>
    <?php PrepareDropDownList("Roles", "Name", "Id", "RoleId", 0); ?>
  </div>

  </form>
  <br><br><br><br><br><br>
</div>

 <!-- end -->

<?php
  include_once "../Layouts/Admin/footer.php"
?>