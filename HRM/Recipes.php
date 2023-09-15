<?php
include_once "../Layouts/Admin/header.php"
?>



<!-- start -->

<div class="container mt-3">
  <h2>Healthy Recipes</h2>

  <h3>Breakfast</h3>
  <table class="table">
    <thead class="table-dark">
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


  <h3>Lunch</h3>
  <table class="table">
    <thead class="table-dark">
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




  <h3>Dinner</h3>
  <table class="table">
    <thead class="table-dark">
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





  <h3>Snacks</h3>
  <table class="table">
    <thead class="table-dark">
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
      
<!-- end -->


<?php
include_once "../Layouts/Admin/footer.php"
?>