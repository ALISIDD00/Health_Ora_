<?php
include_once "../../Layouts/Customer/header.php"
?>

   <style>

   

.rr {
    font-family: Arial, sans-serif;
    width: 100%;
    max-width: 800px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.forcolor {
    color: #33cc33; /* Green color for headings */
    margin-bottom: 20px;
}

.cc {
    margin-top: 20px;
    text-align: left;
}



   </style>




<div class="page-banner overlay-dark bg-image" style="background-image: url(../../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">NutritionPlannings</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Nutrition Plannings</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->






<div class="container rr">
    <div class="content cc">
        <h2 class="forcolor">Expert Guidance on Creating a Balanced and Nutritious Meal Plan</h2>
        <p>Our team of experienced nutritionists and dietitians are here to help you create a personalized meal plan that aligns with your health goals.</p>
        <h3 style ="color: #33cc33;">Personalized Meal Plans</h3>
        <p>At Healthora, we believe that one size doesn't fit all when it comes to nutrition. That's why we offer personalized meal plans tailored to your individual needs:</p>
        
        <ul>
            <li><strong>Age:</strong> Whether you're a teenager, an adult, or a senior, your nutritional requirements differ.</li>
            <li><strong>Goals:</strong> Whether you want to lose weight, build muscle, or simply maintain your health, your meal plan will be customized accordingly.</li>
            <li><strong>Dietary Preferences:</strong> We take into account your food preferences, allergies, and cultural considerations.</li>
        </ul>
        
        <h3 class="forcolor">Choose Your Goal</h3>
        <form method="post">
            <label for="goal">Select Your Goal:</label>
            <select id="goal" name="goal">
                <option value="weight_loss">Weight Loss</option>
                <option value="stay_fit">Stay Fit</option>
                <option value="weight_gain">Weight Gain</option>
            </select>
            <button type="submit" class="btn btn-primary">Generate Meal Plan</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $selected_goal = $_POST["goal"];
            echo "<h3>Your Customized Meal Plan</h3>";
            echo generateMealPlan($selected_goal);
        }
        ?>
        <?php

function generateMealPlan($goal) {
    if ($goal == "weight_loss") {
        return "<p>Here's a sample meal plan for weight loss:</p><ul><li>Breakfast: Oatmeal with berries</li><li>Lunch: Grilled chicken salad</li><li>Snack: Greek yogurt with almonds</li><li>Dinner: Grilled fish with steamed vegetables</li></ul>";
    } elseif ($goal == "stay_fit") {
        return "<p>Here's a sample meal plan for staying fit:</p><ul><li>Breakfast: Scrambled eggs with whole wheat toast</li><li>Lunch: Quinoa and vegetable bowl</li><li>Snack: Fruit salad</li><li>Dinner: Baked chicken with quinoa and greens</li></ul>";
    } elseif ($goal == "weight_gain") {
        return "<p>Here's a sample meal plan for weight gain:</p><ul><li>Breakfast: Peanut butter and banana smoothie</li><li>Lunch: Turkey and avocado wrap</li><li>Snack: Nuts and dried fruits</li><li>Dinner: Beef stir-fry with brown rice</li></ul>";
    } else {
        return "<p>Invalid goal selection.</p>";
    }
}

?>

    </div>
</div>

<?php
include_once "../../Layouts/Customer/footer.php"
?>

