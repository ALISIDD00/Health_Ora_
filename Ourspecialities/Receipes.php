<?php
  include_once "../Layouts/Customer/header.php"
?>



<style>
        
        .rr {
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 1200px;
        }
        .forcolor {
            color: #1E7C6D;
        }
        
      
    </style>








<div class="page-banner overlay-dark bg-image" style="background-image: url(../layouts/Customer/assets/img/homebg.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Receipes</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Receipes</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->




  

    
    

    <div class="container rr">
        <h1 class="forcolor">Healthy Recipes</h1>
        <h2>Breakfast</h2>
        <table class="table">
    <thead class="table-success">
      <tr>
                 <th>Title</th>
                 <th>Ingredients</th>
                 <th>Instructions</th>
                 <th>Picture</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include_once "../DatabaseConfigurations/Lists.php";
            
            PreparebreakfastreceipeList();
       ?>

    </tbody>
  </table>

        <h2>Lunch</h2>
        <table class="table">
    <thead class="table-success">
      <tr>
                 <th>Title</th>
                 <th>Ingredients</th>
                 <th>Instructions</th>
                 <th>Picture</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include_once "../DatabaseConfigurations/Lists.php";
            
            PreparelunchreceipeList();
       ?>

    </tbody>
  </table>



        <h2>Dinner</h2>
        <table class="table">
    <thead class="table-success">
      <tr>
                 <th>Title</th>
                 <th>Ingredients</th>
                 <th>Instructions</th>
                 <th>Picture</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include_once "../DatabaseConfigurations/Lists.php";
            
            PreparedinnerreceipeList();
       ?>

    </tbody>
  </table>



  <h2>Snacks</h2>
        <table class="table">
    <thead class="table-success">
      <tr>
                 <th>Title</th>
                 <th>Ingredients</th>
                 <th>Instructions</th>
                 <th>Picture</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include_once "../DatabaseConfigurations/Lists.php";
            
            PreparesnacksreceipeList();
       ?>

    </tbody>
  </table>


    </div>

    <?php
//             // Fetch snacks recipes from the database
// $sql = "SELECT * FROM snacks_recipes";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr>";
//         echo "<td>" . $row['title'] . "</td>";
//         echo "<td>" . $row['ingredients'] . "</td>";
//         echo "<td>" . $row['instructions'] . "</td>";
//         echo "<td><img src='" . $row['picture'] . "' alt='" . $row['title'] . "' width='100'></td>";
//         echo "</tr>";
//     }
// } else {
//     echo "<tr><td colspan='4'>No recipes found</td></tr>";
// }

            ?>












<?php
  include_once "../Layouts/Customer/footer.php"
?>