<?php
include_once "../Layouts/Customer/header.php"
?>


<style>/* Reset some default styles */


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

.forcolor {
    color: #007f3f; /* Dark green */
    margin-bottom: 10px;
}

.aa {
    color: #007f3f; /* Dark green */
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.aa:hover {
    color: #004c26; /* Lighter green */
}


</style>




<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fitness</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Fitness</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->





    <div class="container rr">
        <section class="sectionn">
            <h2 class="forcolor">Explore Our Fitness Programs</h2>
            <p>Choose a fitness program that suits your age and fitness goals.</p>
        </section>

        <section class="sectionn" id="youth">
            <div class="program-description">
                <h2 class="forcolor">Youth Fitness</h2>
                <p>Fun and active programs designed to instill healthy habits in young individuals. These programs focus on building strength, flexibility, and coordination in a supportive and engaging environment.</p>
            </div>
            <a class="aa" href="#contact-form">Get Started</a>
        </section>

        <section class="sectionn" id="adults">
            <div class="program-description">
                <h2 class="forcolor">Adult Fitness</h2>
                <p>Customized workouts to help adults stay fit, improve energy levels, and manage stress. These programs may include a combination of cardiovascular exercises, strength training, and flexibility work to support overall well-being.</p>
            </div>
            <a class="aa" href="#contact-form">Get Started</a>
        </section>

        <section class="sectionn" id="seniors">
            <div class="program-description">
                <h2 class="forcolor">Senior Fitness</h2>
                <p>Gentle exercises and wellness programs to support seniors in maintaining mobility and vitality. These programs often incorporate low-impact activities, balance exercises, and relaxation techniques to promote physical and mental well-being.</p>
            </div>
            <a class="aa" href="#contact-form">Get Started</a>
        </section>

      
    </div>



<?php
  include_once "../Layouts/Customer/footer.php"
?>