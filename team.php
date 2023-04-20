<?php include('./connections/connection.php'); ?>
<?php include('./components/header.php'); ?>


<div class="site-blocks-cover" id="slide1" style="background-image: url(./assets/images/banner-5.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
</div>
<div class="slide-one-item home-slider owl-carousel" id="slide2">
    
<img src="assets/images/banner-3.jpg" alt="">
</div>


<style>
  @media screen and (min-width : 600px){
  #slide2 {
      display: none;
  }
}
  @media screen and (max-width : 600px){
  #slide1 {
      display: none;
  }
}
</style>
<div class="site-section">
  <div class="container">
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

<?php include('./components/footer.php') ?>