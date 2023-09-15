<?php
include_once "../Layouts/Admin/header.php"
?>




<!-- start -->

<div class="container mt-3">
  <h2>Order's Info</h2>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Pmode</th>
        <th>Products</th>
        <th>Amount_paid</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include "../DatabaseConfigurations/Lists.php";
            
            PrepareordersList();
       ?>

    </tbody>
  </table>
  
</div>
      
<!-- end -->






<?php
include_once "../Layouts/Admin/footer.php"
?>