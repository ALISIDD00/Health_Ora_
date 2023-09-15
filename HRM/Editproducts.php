<?php
  include_once "../Layouts/Admin/header.php"
?>

<style>
  .customWidth {
    width: 100% !important;
  }
  .customLable {
    color: black;
    font-weight: 700;
    margin-top: 5px;
  }
</style>

<!-- start -->

<div class="container mt-3">
  <h2>Add Product's</h2>

  <form method="POST">

  <button type="submit" style="float:right; margin-left: 5px;" class="btn btn-primary">Save</button>
  <a href="http://localhost/Health_Ora/hrm/Shop.php" style="float:right" type="button" class="btn btn-secondary">Back to List</a>

  <?php
      
      include_once "../DatabaseConfigurations/DbFucntions.php";

      $product_name = $product_price = $product_qty = $product_image = $product_code = "";
      $product_nameError = $product_priceError = $product_qtyError = $product_imageError = $product_codeError  = "";
 

      // need to get employee from database
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $result = GetDataById("product", $_GET["id"]);

        if (count($result) > 0) {
            if ($result["Success"] == true) {
                if (mysqli_num_rows($result["Response"]) > 0) {
                    while ($row = mysqli_fetch_assoc($result["Response"])) {
                        $product_name = $row["product_name"];
                        $product_price = $row["product_price"];
                        $product_qty = $row["product_qty"];
                        $product_image = $row["product_image"];
                        $product_code = $row["product_code"];
            
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='4'>No product are found!</td>
                    </tr>";
                }
            }
        }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
                       $product_name = $_POST["product_name"];
                       $product_price = $_POST["product_price"];
                       $product_qty = $_POST["product_qty"];
                       $product_image = $_POST["product_image"];;
                       $product_code = $_POST["product_code"];

                       $product_nameError = empty($product_name) ? "Please enter product_name!" : "";
                       $product_priceError = empty($product_price) ? "Please enter product_price!" : "";
                       $product_qtyError = empty($product_qty) ? "Please enter product_qty!" : "";
                       $product_imageError = empty($product_image) ? "Please enter product_image!" : "";
                       $product_codeError = empty($product_code) ? "Please enter product_code!" : "";


        if (!empty($product_name) && !empty($product_price) && !empty($product_qty) && !empty($product_image) && !empty($product_code)) {
    
    $columnsArray = array(
      "product_name" => $product_name,
      "product_price" => $product_price,
      "product_qty" => $product_qty,
      "product_image" => $product_image,
      "product_code " => $product_code,

    );

    Insert("product", $columnsArray);
  }
}

      ?>

  <div class="form-group">
    <label class="customLable">Product Name:</label>
    <input type="text" placeholder="Enter Product Name" class="sr-input customWidth" id="product_name" name="product_name" value="<?php echo $product_name; ?>">
    <p class="errorMessage"><?php echo $product_nameError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Product Price:</label>
    <input type="text" placeholder="Enter Product Price" class="sr-input customWidth" id="product_price" name="product_price" value="<?php echo $product_price; ?>">
    <p class="errorMessage"><?php echo $product_priceError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Product Quantity:</label>
    <input type="text" placeholder="Enter Product Quantity" class="sr-input customWidth" id="product_qty" name="product_qty" value="<?php echo $product_qty; ?>">
    <p class="errorMessage"><?php echo $product_qtyError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Product Image:</label>
    <input type="product_image" placeholder="Enter Product Image Url" class="sr-input customWidth" id="product_image" name="product_image" value="<?php echo $product_image; ?>">
    <p class="errorMessage"><?php echo $product_imageError; ?></p>
  </div>
  <div class="form-group">
    <label class="customLable">Product Code:</label>
    <input type="product_code" placeholder="Enter Product Code" class="sr-input customWidth" id="product_code" name="product_code" value="<?php echo $product_code; ?>">
    <p class="errorMessage"><?php echo $product_codeError; ?></p>
  </div>
 

  </form>
  <br><br><br><br><br><br>
</div>

 <!-- end -->

<?php
  include_once "../Layouts/Admin/footer.php"
?>