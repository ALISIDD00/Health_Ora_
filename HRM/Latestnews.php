<?php
include_once "../Layouts/Admin/header.php"
?>



<!-- start -->

<div class="container mt-3">
  <h2>Latest New's</h2>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Image_url</th>
        <th>Date_published</th>
        <th>Author</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
            
            include "../DatabaseConfigurations/Lists.php";
            
            PrepareLatestnewsList();
       ?>

    </tbody>
  </table>
  
</div>
      
<!-- end -->


<?php
include_once "../Layouts/Admin/footer.php"
?>