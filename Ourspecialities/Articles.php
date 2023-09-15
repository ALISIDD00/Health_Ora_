<?php
  include_once "../Layouts/Customer/header.php"
?>

<style>
    /* Reset some default styles */


.rr {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.sectionn {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}




.aa:hover {
    color: #004c26; /* Lighter green */
}



/* Styling for specific sections */
.article {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.article:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}



</style>

<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Articles</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Articles</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


  <div class="container rr">
        <section class="section">
            <h2>Explore Informative Health Articles</h2>
            <p>Read our collection of articles covering various health and wellness topics.</p>
        </section>

        <section class="sectionn">
            <div class="article">
                <h2>10 Tips for a Balanced Diet</h2>
                <p>Learn how to maintain a balanced diet that supports your overall health and well-being.</p>
                <a class="aa" href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Articles/Balanceddiet.php" ?>">Read More</a>
            </div>

            <div class="article">
                <h2>Effective Stress Management Techniques</h2>
                <p>Discover practical strategies to reduce stress and promote mental wellness.</p>
                <a class="aa" href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Articles/Stressmanagement.php" ?>">Read More</a>
            </div>

            <div class="article">
                <h2>The Importance of Regular Exercise</h2>
                <p>Explore the benefits of staying physically active and incorporating exercise into your routine.</p>
                <a class="aa" href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Articles//Regularexercise.php" ?>">Read More</a>
            </div>
        </section>

        <section class="sectionn">
            <div class="article">
                <h2>Healthy Sleep Habits for Optimal Well-Being</h2>
                <p>Learn how to establish good sleep habits to improve your overall health and quality of life.</p>
                <a class="aa" href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Articles/OptimalWell-Being.php" ?>">Read More</a>
            </div>

            <div class="article">
                <h2>Mindfulness and Meditation Benefits</h2>
                <p>Discover the positive impact of mindfulness and meditation on mental and emotional wellness.</p>
                <a class="aa" href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Articles/Meditationbenefits.php" ?>">Read More</a>
            </div>

            <div class="article">
                <h2>Tips for Maintaining a Healthy Heart</h2>
                <p>Learn about heart-healthy habits and lifestyle choices that contribute to cardiovascular well-being.</p>
                <a class="aa" href="<?php echo "http://localhost/Health_Ora/Ourspecialities/Articles/Healthyheart.php" ?>">Read More</a>
            </div>

            <div class="article">
                <h2>Public Articles</h2>
                <p>according to public preference.</p>
                <a class="aa" href="<?php echo "http://localhost/Health_Ora/HRM/Articles.php" ?>">Read More</a>
            </div>
        </section>


        
        <section class="sectionn">
            <div class="article">
                <h2>Articles</h2>
                <p>Write your articles here according to your preference!</p>
                <a class="aa" href="<?php echo "http://localhost/Health_Ora/tinypractice.php" ?>">Click Here</a>
            </div>
        </section>



    </div>

<?php
  include_once "../Layouts/Customer/footer.php"
?>