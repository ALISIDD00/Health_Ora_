<?php
include_once "../Layouts/Admin/header.php"
?>



<div class="container mt-3">
<form method="POST">
          <div class="input-group input-navbar">
          <?php
          $firstName = $lastName = $email = $password = $cnic = $address = $phoneNumber = "";
        ?>
            <div class="form-group col-md-2">
          <label class="customLable">First Name:</label>
          <input type="text" class="sr-input" id="FirstName" name="FirstName" value="<?php echo $firstName; ?>">
        </div>
        <div class="form-group col-md-2">
          <label class="customLable">Last Name:</label>
          <input type="text" class="sr-input" id="LastName" name="LastName" value="<?php echo $lastName; ?>">
        </div>
        <div class="form-group col-md-2">
          <label class="customLable">CNIC:</label>
          <input type="text" class="sr-input" id="CNIC" name="CNIC" value="<?php echo $cnic; ?>">
        </div>
        <div class="form-group col-md-2">
          <label class="customLable">Email:</label>
          <input type="text" class="sr-input" id="Email" name="Email" value="<?php echo $email; ?>">
        </div>
            <button type="submit" class="btn btn-dark" name="searchBtn">Search</button>
          </div>
          <?php
          
          ?>
        </form>
  <h2>User's List</h2>

  <form method="POST">

  <a href="http://localhost/Health_Ora/hrm/Create.php" class="btn btn-primary" type="button">Add New User</a>

  <table class="table">
    <thead class="table-dark">
      <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>CNIC</th>
            <th>PhoneNumber</th>
            <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include "../DatabaseConfigurations/Lists.php";

            $filterArray = [];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

              if(isset($_POST['searchBtn'])){
                
                $firstName = $_POST["FirstName"];
                $lastName = $_POST["LastName"];
                $cnic = $_POST["CNIC"];
                $email = $_POST["Email"];
                
                // sepcific
                $filterArray = array(
                  "FirstName" => $firstName,
                  "LastName" => $lastName,
                  "CNIC" => $cnic,
                  "Email" => $email
                );

                // // global
                // $filterArray = array(
                //   "FirstName" => $firstName,
                //   "LastName" => $firstName,
                //   "CNIC" => $firstName,
                //   "Email" => $firstName
                // );





              }

              $employeeId = 0;
              if(isset($_POST['deleteEmployee'])){
                $employeeId = $_POST["deleteEmployee"];
              }

              if ($employeeId > 0) {
                
                DeleteById('Employee', $employeeId, 1);

              }
            }

            PrepareEmployeeeList($filterArray);
          
          ?>
        </tbody>
      </table>



  </form>
  <br><br><br><br><br><br>
</div>



<?php
include_once "../Layouts/Admin/footer.php"
?>