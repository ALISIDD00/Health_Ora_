<?php
include_once "../Layouts/Admin/header.php"
?>



<!-- start -->

<div class="container mt-3">
  <h2>Youth's Info</h2>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Icon</th>
        <th>Name</th>
        <th>Bio</th>
        <th>Pt-01</th>
        <th>Pt-02</th>
        <th>Pt-03</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include "../DatabaseConfigurations/Lists.php";
            
            PrepareAyouthList();
       ?>

    </tbody>
  </table>
  
</div>
      
<!-- end -->


<?php
include_once "../Layouts/Admin/footer.php"
?>