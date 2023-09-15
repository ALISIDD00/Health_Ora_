<?php
include_once "../Layouts/Customer/header.php"
?>
    <style>


form {
    display: grid;
    grid-template-columns: 1fr;
    gap: 10px;
}

.rr {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
    font-weight: bold;
}

input[type="number"], select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #33cc33;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #28a745;
}

.result {
    margin-top: 20px;
    text-align: center;
    font-weight: bold;
    color: #33cc33;
}

    </style>


<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">MaintenanceCaloriesCalculator</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Maintenance Calories Calculator</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->





<?php
// Initialize variables
$weight = $age = $height = $activityLevel = $maintenanceCalories = "";

// Function to calculate maintenance calories
function calculateMaintenanceCalories($weight, $age, $height, $activityLevel) {
    // Activity level multipliers
    $activityMultipliers = array(
        "sedentary" => 1.2,
        "lightly_active" => 1.375,
        "moderately_active" => 1.55,
        "very_active" => 1.725,
        "extra_active" => 1.9
    );

    // Calculate maintenance calories
    $maintenanceCalories = (10 * $weight) + (6.25 * $height) - (5 * $age) + 5;
    $maintenanceCalories *= $activityMultipliers[$activityLevel];

    return $maintenanceCalories;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = floatval($_POST["weight"]);
    $age = intval($_POST["age"]);
    $height = intval($_POST["height"]);
    $activityLevel = $_POST["activity_level"];

    $maintenanceCalories = calculateMaintenanceCalories($weight, $age, $height, $activityLevel);
}
?>
<div class="container rr">
<form method="post" action="">
    <label for="weight">Weight (kg):</label>
    <input type="number" step="0.01" name="weight" required><br>

    <label for="age">Age:</label>
    <input type="number" name="age" required><br>

    <label for="height">Height (cm):</label>
    <input type="number" name="height" required><br>

    <label for="activity_level">Activity Level:</label>
    <select name="activity_level">
        <option value="sedentary">Sedentary (little to no exercise)</option>
        <option value="lightly_active">Lightly Active (light exercise/sports 1-3 days/week)</option>
        <option value="moderately_active">Moderately Active (moderate exercise/sports 3-5 days/week)</option>
        <option value="very_active">Very Active (hard exercise/sports 6-7 days/week)</option>
        <option value="extra_active">Extra Active (very hard exercise/sports, physical job, or training)</option>
    </select><br>

    <input type="submit" value="Calculate">
</form>

<?php
// Display maintenance calories if calculated
if ($maintenanceCalories != "") {
    echo "<p>Your estimated maintenance calories: <strong>" . round($maintenanceCalories) . " calories/day</strong></p>";
}
?>
</div>

<?php
include_once "../Layouts/Customer/footer.php"
?>
