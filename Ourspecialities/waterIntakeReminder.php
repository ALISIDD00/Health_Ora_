<?php
include_once "../Layouts/Customer/header.php"
?>
    <style>/* Reset some default styles */


.rr {
    font-family: Arial, sans-serif;
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

h2 {
    color: #005b99; /* Blue */
}

a {
    color: #007f3f; /* Dark green */
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

a:hover {
    color: #004c26; /* Lighter green */
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

.button:hover {
    background-color: #004c26; /* Lighter green */
}

.glass-container {
    text-align: center;
    margin-bottom: 20px;
}

.glass {
    position: relative;
    width: 100px;
    height: 200px;
    margin: 0 auto;
    background-color: #e0e0e0; /* Glass color */
    border-radius: 10px;
    border: 3px solid #007f3f; /* Dark green */
    overflow: hidden;
    transition: border-color 0.3s ease-in-out;
}

.glass:hover {
    border-color: #004c26; /* Lighter green */
}

.water {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #005b99; /* Blue */
    height: 0;
    transition: height 0.5s ease-in-out;
}

#drink-button {
    margin-top: 20px;
    background-color: #007f3f; /* Dark green */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

#drink-button:hover {
    background-color: #004c26; /* Lighter green */
}


</style>



<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">waterIntakeReminder</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Water In Take Reminder</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->




    <div class="container rr">
        <h1 class="forcolor">Stay Hydrated!</h1>
        <div class="glass-container">
            <div class="glass">
                <div class="water"></div>
            </div>
        </div>
        <p id="reminder">Remember to drink water regularly to stay healthy.</p>
        <button id="drink-button" onclick="drinkWater()">I drank water!</button>
    </div>

    <script>
        let waterCount = 0;

        function drinkWater() {
            waterCount++;
            updateWaterLevel();
            updateReminder();
        }

        function updateWaterLevel() {
            const waterElement = document.querySelector('.water');
            waterElement.style.height = (waterCount * 10) + '%';
        }

        function updateReminder() {
            const reminderElement = document.getElementById("reminder");
            if (waterCount === 0) {
                reminderElement.innerText = "Remember to drink water regularly to stay healthy.";
            } else {
                reminderElement.innerText = `You've had ${waterCount} ${waterCount === 1 ? 'glass' : 'glasses'} of water. Stay hydrated!`;
            }
        }

        // Check and remind user to drink water every hour
        function remindToDrink() {
            const now = new Date();
            const hours = now.getHours();
            if (hours >= 9 && hours <= 17) { // Adjust the reminder hours as needed
                if (waterCount < 8) { // Adjust the target water intake as needed
                    alert("It's time to drink water! Stay hydrated.");
                }
            }
        }

        // Set a reminder every hour (in milliseconds)
        setInterval(remindToDrink, 3600000);
    </script>


<?php
include_once "../Layouts/Customer/footer.php"
?>
