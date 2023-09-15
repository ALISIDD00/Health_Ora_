<?php
include_once "../Layouts/Admin/header.php"
?>



<!-- start -->

<div class="container mt-3">
  <h2>Contact's Info</h2>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include "../DatabaseConfigurations/Lists.php";
            
            PreparecontactsList();
       ?>

    </tbody>
  </table>
  
</div>
      
<!-- end -->


<?php
include_once "../Layouts/Admin/footer.php"
?>