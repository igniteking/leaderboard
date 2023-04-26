<?php include('./connections/connection.php'); ?>
<?php include('./components/header.php'); ?>

<div class="container">
    <center>
      <h1 style="margin-top: 60px;">Athletics</h1>
    </center>
  </div>

<div class="site-blocks-vs site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">Athletic Games</h2>
        <div class="site-block-tab">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-football-tab"  href="matches.php?game_name=100%20METER%20RACE" role="tab" aria-controls="pills-football" aria-selected="true">100 METER RACE </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-basketball-tab" href="matches.php?game_name=200%20METER%20RACE" role="tab" aria-controls="pills-basketball" aria-selected="false">200 METER RACE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-cricket-tab" href="matches.php?game_name=400%20METER%20RACE" role="tab" aria-controls="pills-cricket" aria-selected="false">400 METER Race</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-kabaddi-tab"  href="matches.php?game_name=100x4%20RELAY%20RACE" role="tab" aria-controls="pills-kabaddi" aria-selected="false">100x4 RELAY RACE </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include('./components/footer.php') ?>