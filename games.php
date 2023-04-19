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
      <?php for ($i = 0; $i < 16; $i++) {
        echo '
        <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
        <a href="./matches.php" style="all: unset;">
    <div class="player mb-5">
      <span class="team-number">' . $i . '</span>
      <img src="./assets/images/games/athletic.jpeg" alt="Image" class="img-fluid image rounded-circle">
      <h2>Game ' . $i + 1 . '</h2>
      <span class="position">Game ' . $i + 1 . '</span>
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
        <div class="col-md-12 text-center">
          <h2 class="text-black">Match Highlights</h2>
        </div>
      </div>
      <br><br>
      <?php include('./components/trio.php'); ?>

    </div>
  </div>

  <?php include('./components/footer.php') ?>