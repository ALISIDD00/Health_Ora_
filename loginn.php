<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Login & Registration Form | CoderGirl</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="style.css">
  <style>

  /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #009579;
  background-image:url(Layouts/Customer/assets/img/homebg.png);
  background-size: cover;
   
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: #fff;
  border-radius: 7px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
}
.container .registration{
  display: none;
}
#check:checked ~ .registration{
  display: block;
}
#check:checked ~ .login{
  display: none;
}
#check{
  display: none;
}
.container .form{
  padding: 2rem;
}
.form header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .form input{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #009579;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
.form input.button{
  color: #fff;
  background: #009579;
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
}
.form input.button:hover{
  background: #006653;
}
.signup{
  font-size: 17px;
  text-align: center;
}
.signup label{
  color: #009579;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
}

.main_bt{
  border: #009579; /* Remove borders */
  color: #fff; /* Add a text color */
  padding: 14px 28px; /* Add some padding */
  cursor: pointer; /* Add a pointer cursor on mouse-over */
  background-color: #009579;
  
}
.main_bt:hover{
  background-color: #006653;
}

  .customLable {
    color: black;
    font-weight: 700;
    margin-top: 5px;
  }

  </style>
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form method="POST">

      <?php
                           include_once "DatabaseConfigurations/DbFucntions.php";
                           $email = $password = "";
                           $emailError = $passwordError = $generalError = "";
                           if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              $password = $_POST["Password"];
                              $email = $_POST["Email"];
                              $passwordError = empty($password) ? "Please enter Password!" : "";
                              $emailError = empty($email) ? "Please enter Email!" : "";
                              if (!empty($password) && !empty($email)) {
                                 $result = Login($email, $password);
                                 if (count($result) > 0) {
                                    if ($result["Success"] == true) {
                                          if (mysqli_num_rows($result["Response"]) > 0) {

                                             $roleName = "";

                                             while ($row = mysqli_fetch_assoc($result["Response"])) {
                                                setcookie("username", $email, time() + 36000);
                                                $fullName = $row["FirstName"] . " " . $row["LastName"];
                                                setcookie("fullname", $fullName, time() + 36000);
                                                setcookie("role", $row["RoleName"], time() + 36000);
                                                $roleName = $row["RoleName"];
                                             }

                                             // to do a role based reirection
                                             if ($roleName == "Admin") {
                                                header("Location:http://localhost/Health_Ora/HRM/AdminDashboard.php");
                                             }
                                             else {
                                                header("Location:http://localhost/Health_Ora/home.php");
                                             }
                                          }
                                          else {
                                          $generalError = "Username or Password is invalid!";
                                          }
                                    }
                                }
                              }
                           }
                        ?>
                        
        <input type="text" placeholder="Enter your email" name="Email" value="<?php echo $email; ?>">
        <p class="errorMessage"><?php echo $emailError; ?></p>
        <input type="password" placeholder="Enter your password" name="Password" value="<?php echo $password; ?>">
        <p class="errorMessage"><?php echo $passwordError; ?></p>
          <button type="submit" class="main_bt">Sing In</button>
          <p class="errorMessage"><?php echo $generalError; ?></p>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form"> 
      <!-- <br><br><br><br><br><br><br><br><br> -->
      <header>Signup</header>
      <form method="POST">
        
     <!-- #region -->
     <?php

                    include_once "DatabaseConfigurations/DbFucntions.php";

                    $firstName = $lastName = $email = $password = "";
                    $firstNameError = $lastNameError = $emailError = $passwordError = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                      
                      $firstName = $_POST["FirstName"];
                      $lastName = $_POST["LastName"];
                      $password = $_POST["Password"];
                      $email = $_POST["Email"];
                      $roleId = $_POST["RoleId"];

                      $firstNameError = empty($firstName) ? "Please enter First Name!" : "";
                      $lastNameError = empty($lastName) ? "Please enter Last Name!" : "";
                      $emailError = empty($email) ? "Please enter Email!" : "";
                      $passwordError = empty($password) ? "Please enter Password!" : "";
  

                      if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($password)) {
                        
                        $columnsArray = array(
                          "FirstName" => $firstName,
                          "LastName" => $lastName,
                          "Password" => $password,
                          "Email" => $email,
                          "RoleId" => $roleId
                        );

                        Insert("Employee", $columnsArray);
                      }
                    }
                    ?>
     <!-- #endregion -->

        <input type="text" placeholder="Enter your FirstName" required id="FirstName" name="FirstName" value="<?php echo $firstName; ?>">
        <p class="errorMessage"><?php echo $firstNameError; ?></p>

        <input type="text" placeholder="Enter your LastName" required id="LastName" name="LastName" value="<?php echo $lastName; ?>">
        <p class="errorMessage"><?php echo $lastNameError; ?></p>

        <input type="email" placeholder="Enter your Email" required id="Email" name="Email" value="<?php echo $email; ?>">
        <p class="errorMessage"><?php echo $emailError; ?></p>

        <input type="password" placeholder="Enter your Password" required id="Password" name="Password" value="<?php echo $password; ?>">
        <p class="errorMessage"><?php echo $passwordError; ?></p>


        <div class="form-group">
                        <label class="customLable" required>Role:</label>
                        <?php PrepareDropDownList("Roles", "Name", "Id", "RoleId", 0); ?>
                      </div>



        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
