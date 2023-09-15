<?php
include_once "../Layouts/Admin/header.php"
?>


 <!-- start -->


 <div class="container mt-3">
  <h2>Feedback's Info</h2>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Feedback</th>
        <th>Suggestions</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include "../DatabaseConfigurations/Lists.php";
            
            PreparefeedbacksList();
       ?>

    </tbody>
  </table>
  
</div>








<!-- end -->


<?php
include_once "../Layouts/Admin/footer.php"
?>