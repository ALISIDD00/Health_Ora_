<?php
include_once "../Layouts/Customer/header.php"
?>

<style>

.rr {
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

.content {
    margin-top: 20px;
    text-align: left;
}


ul {
    list-style-type: disc;
    color: #555;
    margin-top: 10px;
    margin-left: 20px;
}

li {
    margin-top: 5px;
}

/* Responsive Styles */



    </style>

<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FitnessCoaching</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Fitness Coaching</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


<div class="container rr">
    <h1 class="forcolor">Fitness Coaching</h1>
    
    <div class="content">
        <h2 class="forcolor">Work with Experienced Fitness Coaches</h2>
        <p>Our fitness coaching program is designed to help you achieve your health and fitness goals under the guidance of experienced coaches. Whether you're looking to build muscle, improve endurance, lose weight, or enhance overall fitness, our coaches will create a personalized workout routine tailored to your needs.</p>
        
        <h3 class="forcolor">Benefits of Fitness Coaching</h3>
        <ul>
            <li>Expert Guidance: Our coaches have years of experience and knowledge to guide you.</li>
            <li>Customized Workouts: Your workout plan is designed to align with your goals, preferences, and fitness level.</li>
            <li>Accountability: Regular check-ins and support from your coach keep you on track.</li>
            <li>Variety and Progression: Your routines evolve as you progress, preventing plateaus.</li>
        </ul>
        
        <h3 class="forcolor">Getting Started</h3>
        <p>When you sign up for our fitness coaching program, you'll start with an initial assessment. Our coaches will discuss your goals, fitness history, and any limitations you may have. Based on this information, they'll design a comprehensive workout plan that includes exercises, sets, reps, and progressions.</p>
        
        <h3 class="forcolor">Ongoing Support</h3>
        <p>Your fitness journey doesn't stop with the initial plan. Our coaches will provide ongoing support and adjustments to ensure your workouts remain effective and aligned with your progress. Whether you need modifications due to schedule changes or want to take your workouts to the next level, our coaches are here for you.</p>
    </div>
    <div class="container rr">
    
    
    <div class="content">
      

        <h3 class="forcolor">Interactive Workout Demonstrations</h3>
        <p>Learn how to perform various exercises correctly with our interactive workout demonstrations.</p>

        <ul class="exercise-list">
        <li class="exercise">
    <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/vid/pexels-gabby-k-6980765 (2160p).mp4" ?>" class="exercise-name" onclick="showExerciseVideo('youtube_video_id')">Squats</a>
    <div class="exercise-description">Squats are a compound exercise that strengthens the lower body, including the thighs, glutes, and lower back, while also improving overall stability and balance.</div>
</li>
<li class="exercise">
    <a href="<?php echo "http://localhost/Health_Ora/Ourspecialities/vid/production_id_4754030 (2160p).mp4" ?>" class="exercise-name" onclick="showExerciseVideo('youtube_video_id')">Push-Ups</a>
    <div class="exercise-description">Push-ups are a versatile bodyweight exercise that target the chest, shoulders, triceps, and core, enhancing upper body strength and endurance.</div>
</li>
        </ul>
        
    </div>
</div>

</div>

<?php
include_once "../Layouts/Customer/footer.php"
?>
