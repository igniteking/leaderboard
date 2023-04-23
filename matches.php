<?php include('./connections/connection.php'); ?>
<?php include('./components/header.php'); ?>
<div class="site-section site-blocks-vs">

  <div class="container">
    <center>
      <h1 style="margin-bottom: 20px;">Matches</h1>
    </center>
  </div>

  <div class="site-blocks-vs site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">Latest Matches</h2>
          <div class="site-block-tab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <?php
              $game_name_get = $_GET['game_name'];
              $fetch = mysqli_query($conn, "SELECT * FROM game_data WHERE game_name LIKE '%$game_name_get%'");
              while ($row = mysqli_fetch_array($fetch)) {
                $game_name = $row['game_name'];
                $game_type = $row['game_type'];
                @++$z;
                echo '<li class="nav-item">
                  <a class="nav-link';
                if ($z == 1) {
                  echo ' active';
                }
                echo '" id="pills-' . $game_type . '-tab" data-toggle="pill" href="#pills-' . $game_type . '" role="tab" aria-controls="pills-' . $game_type . '" aria-selected="true">' . $game_name . '(' . $game_type . ')' . '</a>
                </li>';
              }
              ?>
            </ul>

            <div class="tab-content" id="pills-tabContent">
              <?php
              $game_name = $_GET['game_name'];
              $fetch = mysqli_query($conn, "SELECT * FROM game_data WHERE game_name LIKE '%$game_name_get%'");
              while ($row = mysqli_fetch_array($fetch)) {
                $game_name = $row['game_name'];
                $game_name = $row['game_type'];
                @++$y;
                echo '
                <div class="tab-pane fade';
                if ($y == 1) {
                  echo ' show active';
                }
                echo '" id="pills-' . $game_name . '" role="tabpanel" aria-labelledby="pills-' . $game_name . '">
                  <!-- Next Match -->
                  <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
                    <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                      Next match of Football
                      <div id="demo"></div>
                    </div>

                    <div class="ml-auto pr-4 order-md-2">
                      <div class="h5 text-black text-uppercase text-center text-lg-left">
                        <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                          <img src="assets/images/team/img 5.png" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Engineering </span>
                        </div>
                        <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span>
                        <div class="d-block d-md-inline-block">
                          <img src="assets/images/team/img 6.png" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">Management</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="" onload="football()"></div>
                  <div class="" id="football"></div>

                  <!-- Previous Matches -->
                  <div class="row align-items-center">';

                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%$game_name_get%' LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<div class="col-md-12">
                    <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                      <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">
                        <div class="text-center text-lg-left">
                          <div class="d-block d-lg-flex align-items-center">
                            <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                              <img src="admin/' . array_values(mysqli_fetch_array($conn->query("SELECT collage_logo FROM `collage_data` WHERE collage_name='$team_1'")))[0] . '" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                              <h3 class="h5 mb-0 text-black">' . $team_1 . '</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                        <div class="d-inline-block">
                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='1'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-lg-4 text-center text-lg-right">
                        <div class="">
                          <div class="d-block d-lg-flex align-items-center">
                            <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                              <img src="admin/' . array_values(mysqli_fetch_array($conn->query("SELECT collage_logo FROM `collage_data` WHERE collage_name='$team_2'")))[0] . '" alt="Image" class="img-fluid">
                            </div>
                            <div class="text order-1 w-100">
                              <h3 class="h5 mb-0 text-black">' . $team_2 . '</h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>';
                }
              ?>
                <!-- END row -->

            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<?php include('./components/footer.php') ?>