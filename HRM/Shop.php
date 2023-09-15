<?php
include_once "../Layouts/Admin/header.php"
?>





<!-- start -->

<div class="container mt-3">
  <h2>Inventory Items</h2>

  <form method="POST">
  
  <a href="http://localhost/Health_Ora/hrm/Products.php" class="btn btn-primary" type="button">Add New Product</a>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Product_name</th>
        <th>Product_price</th>
        <th>Product_qty</th>
        <th>Product_image</th>
        <th>Product_code </th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include "../DatabaseConfigurations/Lists.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $productid = $_POST["deleteproduct"];

              if ($productid > 0) {
                
                DeleteById('product', $productid, 1);

              }
            }

            PrepareshopList();
          
          ?>

    </tbody>
  </table>

  </form>
  <br><br><br><br><br><br>
</div>
      
<!-- end -->




<?php
include_once "../Layouts/Admin/footer.php"
?>