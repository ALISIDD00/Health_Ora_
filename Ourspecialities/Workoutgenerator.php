<?php
include_once "../Layouts/Customer/header.php"
?>

<style>

                                               
.rr {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
    
}


form {
    display: grid;
    gap: 10px;
    text-align: left;
    padding: 20px;
    border: 1px solid #33cc33; /* Green border color */
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


.label {
    font-weight: bold;
    color: #333;
}

.input-box {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.select-box {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    appearance: none;
    background-color: white;
}

.input-box:focus,
.select-box:focus {
    outline: none;
    border-color: #33cc33;
}

.button {
    background-color: #33cc33;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button:hover {
    background-color: #28a745;
}

.result {
    margin-top: 20px;
    font-weight: bold;
    color: #33cc33;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    
    
}



    </style>



<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Workoutroutinegenerator</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Workout Routine Generator</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->



  <div class="container mt-5 rr" >
    <div class="col-sm-12">
        

<?php
// Initialize variables
$goal = $equipment = $routine = "";

// Sample workout routines based on different goals
$workoutRoutines = array(
    "weight_loss" => array(
        "Warm-up: 5 minutes of light cardio",
        "Circuit 1: Push-ups, Squats, Plank",
        "Circuit 2: Lunges, Bent-over Rows, Mountain Climbers",
        "Cool-down: Stretching",
    ),
    "muscle_gain" => array(
        "Warm-up: 5 minutes of light cardio",
        "Circuit 1: Bench Press, Deadlifts, Pull-ups",
        "Circuit 2: Leg Press, Rows, Bicep Curls",
        "Cool-down: Stretching",
    ),
    "overall_fitness" => array(
        "Warm-up: 5 minutes of light cardio",
        "Circuit 1: Jumping Jacks, Lunges, Push-ups",
        "Circuit 2: Plank, Squats, Bent-over Rows",
        "Cool-down: Stretching",
    )
);

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $goal = $_POST["goal"];
    $equipment = $_POST["equipment"];

    // Generate a random routine based on the selected goal///////
    if (isset($workoutRoutines[$goal])) {
        $routine = $workoutRoutines[$goal];
    }
}
?>

<form method="post" action="">
    <label for="goal">Fitness Goal:</label>
    <select name="goal">
        <option value="weight_loss">Weight Loss</option>
        <option value="muscle_gain">Muscle Gain</option>
        <option value="overall_fitness">Overall Fitness</option>
    </select><br>

    <label for="equipment">Available Equipment:</label>
    <input type="text" name="equipment" placeholder="Dumbbells, Resistance Bands, etc."><br>

    <input type="submit" value="Generate Routine">
</form>

<?php
// Display generated routine if available
if (!empty($routine)) {
    echo "<h3>Your Custom Workout Routine:</h3>";
    echo "<ul>";
    foreach ($routine as $exercise) {
        echo "<li>$exercise</li>";
    }
    echo "</ul>";
}
?>

</div>
</div>

<br><br>

<?php
include_once "../Layouts/Customer/footer.php"
?>