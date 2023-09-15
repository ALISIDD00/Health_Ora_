<?php
  include_once "../Layouts/Customer/header.php"
?>


    <style>

form {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center form horizontally */
}

label {
    margin-bottom: 5px;
    color: #333;
}

input {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.result {
    margin-top: 20px;
    padding: 15px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    border-radius: 5px;
}

.result h2 {
    margin: 0;
    font-size: 24px;
}

.result p {
    font-size: 18px;
    margin: 10px 0;
}

@media (max-width: 600px) {
    .container {
        padding: 10px;
    }

    input, button {
        width: 100%;
    }
}

      
    </style>



<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">OnlineBMIchecker</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Online BMI Checker</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->




    <form action="./bmiChecker.php" method="post">
        <label for="height">Height (m):</label>
        <input type="number" step="0.01" name="height" required><br>

        <label for="weight">Weight (kg):</label>
        <input type="number" step="0.01" name="weight" required><br>

        <button type="submit">Calculate BMI</button>
    </form>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $height = $_POST["height"];
        $weight = $_POST["weight"];

        if ($height > 0) {
            // Calculate BMI
            $bmi = $weight / ($height * $height);

            // Categorize BMI
            if ($bmi < 18.5) {
                $category = "Underweight";
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                $category = "Normal Weight";
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                $category = "Overweight";
            } else {
                $category = "Obese";
            }

            echo "<div class='result'>";
            echo "<h2>Your BMI: $bmi</h2>";
            echo "<p>Category: $category</p>";
            echo "</div>";
        } else {
            echo "<div class='error'>";
            echo "<p>Error: Please enter a valid height.</p>";
            echo "</div>";
        }
    }
    ?>


<?php
  include_once "../Layouts/Customer/footer.php"
?>