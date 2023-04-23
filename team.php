<?php include('./connections/connection.php'); ?>
<?php include('./components/header.php'); ?>


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h2 class="text-black">Teams</h2>
            </div>
        </div>
   

    <div class="row mb-5">
      <?php
      $fetch_collage = mysqli_query($conn, "SELECT * FROM `collage_data`");
      while ($row = mysqli_fetch_array($fetch_collage)) {
        $collage_name = $row['collage_name'];
        $collage_logo = $row['collage_logo'];
        echo '<div class="col-md-6 col-lg-4 mb-4">
          <div class="post-entry">
            <div class="image">
              <center>
              <img src="./admin/' . $collage_logo . '" alt="Image" class="img-fluid">
              </center>
            </div>
            <div class="text p-4">
              <h2 class="h5 text-black"><a href="#"> <center>' . $collage_name . '</center></a></h2>
            </div>
          </div>
        </div>';
      } ?>

    </div>
  </div>
</div>
</div>
</div>
<?php include('./components/footer.php') ?>