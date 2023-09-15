<?php
  include_once "../Layouts/Customer/header.php"
?>


<style>/* Reset some default styles */



.rr {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.forcolor {
    color: #007f3f; /* Dark green */
    margin-bottom: 10px;
}



.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007f3f; /* Dark green */
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}


#bp-form {
    text-align: center;
}

#check-button {
    background-color: #007f3f; /* Dark green */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

#check-button:hover {
    background-color: #004c26; /* Lighter green */
}

#result {
    font-size: 18px;
    margin-top: 20px;
    padding: 10px;
    background-color: #f0f8f4; /* Pale green */
    border: 1px solid #b4d4bf; /* Light green */
    border-radius: 5px;
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
</style>


<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Weightcheck</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Weight Check</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->



  <div class="container rr">
        <h1 class="forcolor">Blood Pressure Checker</h1>
        <form id="bp-form">
            <label for="systolic">Systolic Pressure (mmHg):</label>
            <input type="number" id="systolic" required>

            <label for="diastolic">Diastolic Pressure (mmHg):</label>
            <input type="number" id="diastolic" required>

            <button type="button" id="check-button">Check Blood Pressure</button>
        </form>
        <p id="result"></p>
    </div>

    <script>
        const checkButton = document.getElementById("check-button");
        const resultElement = document.getElementById("result");

        checkButton.addEventListener("click", () => {
            const systolic = parseInt(document.getElementById("systolic").value);
            const diastolic = parseInt(document.getElementById("diastolic").value);

            if (!isNaN(systolic) && !isNaN(diastolic)) {
                if (systolic < 90 || diastolic < 60) {
                    resultElement.innerHTML = "Low blood pressure. Consult a doctor.";
                } else if (systolic >= 90 && systolic <= 120 && diastolic >= 60 && diastolic <= 80) {
                    resultElement.innerHTML = "Normal blood pressure. Keep up the good work!";
                } else if ((systolic > 120 && systolic <= 140) || (diastolic > 80 && diastolic <= 90)) {
                    resultElement.innerHTML = "Elevated blood pressure. Monitor and make healthy lifestyle changes.";
                } else {
                    resultElement.innerHTML = "High blood pressure. Consult a doctor for advice.";
                }
            } else {
                resultElement.innerHTML = "Please enter valid values.";
            }
        });
    </script>


<?php
  include_once "../Layouts/Customer/footer.php"
?>