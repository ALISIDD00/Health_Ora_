<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="<?php echo "http://localhost/Health_Ora/css/style.css" ?>">
	</head>

	<body>


    <?php

                    include_once "DatabaseConfigurations/DbFucntions.php";

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
		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form action="">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input type="text" class="form-control" required id="FirstName" name="FirstName" value="<?php echo $firstName; ?>">
                            <p class="errorMessage"><?php echo $firstNameError; ?></p>
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input type="text" class="form-control" required id="LastName" name="LastName" value="<?php echo $lastName; ?>">
                            <p class="errorMessage"><?php echo $lastNameError; ?></p>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Cnic</label>
						<input type="text" class="form-control" required id="CNIC" name="CNIC" value="<?php echo $cnic; ?>">
                        <p class="errorMessage"><?php echo $cnicError; ?></p>
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input type="password" class="form-control" required id="Email" name="Email" value="<?php echo $email; ?>">
                        <p class="errorMessage"><?php echo $emailError; ?></p>
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input type="password" class="form-control" required id="Password" name="Password" value="<?php echo $password; ?>">
                        <p class="errorMessage"><?php echo $passwordError; ?></p>
					</div>
                    <div class="form-wrapper">
						<label for="">PhoneNumber</label>
						<input type="password" class="form-control" required id="PhoneNumber" name="PhoneNumber" value="<?php echo $phoneNumber; ?>">
                        <p class="errorMessage"><?php echo $phoneNumberError; ?></p>
					</div>
                    <div class="form-wrapper">
						<label for="">Address</label>
						<input type="password" class="form-control" required id="Address" name="Address" value="<?php echo $address; ?>">
                        <p class="errorMessage"><?php echo $addressError; ?></p>
					</div>
                    <div class="form-group">
                        <label class="customLable" required>Role:</label>
                        <?php PrepareDropDownList("Roles", "Name", "Id", "RoleId", 0); ?>
                      </div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
					<button type="submit">Register Now</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>