<?php include('./connections/connection.php'); ?>
<?php include('./components/header.php'); ?>

<div class="site-blocks-cover" style="background-image: url(./assets/images/banner-6.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"></div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mb-5">
        <h2 class="text-black">Games</h2>
      </div>
    </div>
    <div class="row">
      <?php
      $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `game_data`");
      while ($row = mysqli_fetch_array($fetch_all_Games)) {
        $game_id = $row['game_id'];
        $game_name = $row['game_name'];
        $game_description = $row['game_description'];
        $game_type = $row['game_type'];
        $game_logo = $row['game_logo'];
        echo '
        <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
        <a href="./matches.php" style="all: unset;">
    <div class="player mb-5">
      <span class="team-number"></span>
      <img src="./admin/' . $game_logo . '" alt="Image" class="img-fluid image rounded-circle">
      <h2>' . $game_name . '</h2>
      <span class="position">' . $game_type . '</span>
      </div>
      </a>
      </div>
      ';
      } ?>
    </div>
  </div>

  <div class="site-section feature-blocks-1 no-margin-top">
    <div class="container">
      <div class="row mb-4">
        <?php include('./components/trio.php'); ?>
      </div>
    </div>
  </div>
</div>

<?php include('./components/footer.php') ?>