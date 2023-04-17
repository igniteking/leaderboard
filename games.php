<?php include('./components/header.php'); ?>

<div class="site-blocks-cover overlay" style="background-image: url(./assets/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-start">
      <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
        <h1 class="bg-text-line">Our Games</h1>
        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maxime velit nostrum praesentium voluptatem. Mollitia perferendis dolore dolores.</p>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center mb-5">
        <h2 class="text-black">Games</h2>
      </div>
    </div>
    <div class="row">
      <?php for ($i = 0; $i < 17; $i++) {
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
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <h2 class="text-black">Match Highlights</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="100">
          <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('./assets/images/img_1.jpg');">
            <div class="text">
              <h2 class="h5 text-white">Russia's World Cup Championship</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
              <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="200">
          <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('./assets/images/img_2.jpg');">
            <div class="text">
              <h2 class="h5 text-white">Russia's World Cup Championship</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
              <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade" data-aos-delay="300">
          <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('./assets/images/img_3.jpg');">
            <div class="text">
              <h2 class="h5 text-white">Russia's World Cup Championship</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
              <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('./components/footer.php') ?>