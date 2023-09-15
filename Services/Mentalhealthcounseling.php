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
            <li class="breadcrumb-item active" aria-current="page">Mentalhealthcounseling</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Mental Health Counseling</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->




 

    <div class="container rr">
        <section class="sectionn">
            <h2 class="forcolor">Professional Counselling Services</h2>
            <p>Receive expert guidance and support for your mental well-being.</p>
            <a class="aa" href="#contact-form">Schedule a Session</a>
        </section>

        <section class="sectionn">
            <h2 class="forcolor">Our Approach</h2>
            <p>We provide personalized and compassionate counselling tailored to your needs.</p>
        </section>

        <section class="sectionn">
            <h2 class="forcolor">Areas of Focus</h2>
            <ul>
                <li><a class="aa" href="#anxiety">Anxiety</a></li>
                <li><a class="aa" href="#depression">Depression</a></li>
                <li><a class="aa" href="#stress">Stress Management</a></li>
                <!-- Add more areas of focus here -->
            </ul>
        </section>

        <section class="sectionn" id="anxiety">
            <h2 class="forcolor">Anxiety Counselling</h2>
            <p>Learn effective strategies to manage and cope with anxiety in a supportive environment.</p>
            <a class="aa" href="#contact-form">Get Started</a>
        </section>

        <section class="sectionn" id="depression">
            <h2 class="forcolor">Depression Counselling</h2>
            <p>Explore techniques to navigate through depression and improve your mental well-being.</p>
            <a class="aa" href="#contact-form">Get Started</a>
        </section>

        <section class="sectionn" id="stress">
            <h2 class="forcolor">Stress Management</h2>
            <p>Develop skills to handle stress and create a healthier work-life balance.</p>
            <a class="aa" href="#contact-form">Get Started</a>
        </section>

        
    </div>





<?php
  include_once "../Layouts/Customer/footer.php"
?>