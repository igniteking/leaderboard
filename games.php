<?php include('./components/header.php'); ?>

<<<<<<< HEAD
<div class="site-blocks-cover overlay" style="background-image: url(./assets/images/gallery/010.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-start">
      <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
        <h1 class="bg-text-line">Our Games</h1>
        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>
      </div>
    </div>
  </div>
</div>
=======
<div class="site-blocks-cover" style="background-image: url(./assets/images/banner-6.jpg);" data-aos="fade" data-stellar-background-ratio="0.5"></div>
>>>>>>> 418b1ea8cf2a9067850c7633aaa0b65419180fa9

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