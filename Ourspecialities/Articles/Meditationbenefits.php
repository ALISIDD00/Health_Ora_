<?php
include_once "../../Layouts/Customer/header.php"
?>



<!-- start -->


<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12">


    <?php
    
    
            
            include "../../DatabaseConfigurations/Lists.php";
            
            PrepareMeditationbenefitsList();
       ?>

      </div>

           </div>

               </div>
<!-- end -->





<?php
include_once "../../Layouts/Customer/footer.php"
?>