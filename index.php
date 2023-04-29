<!-- Connections Starts -->
<?php include('./connections/connection.php'); ?>

<?php include('./components/header.php'); ?>
<!-- Header Ends -->

<!-- Header Starts -->
<?php include('./components/carousel.php'); ?>
<br><br>
<!-- Header Ends -->
<?php include('./components/trio.php'); ?>

<!-- Score Board  -->
<div class="site-blocks-vs site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">Latest Matches</h2>
        <div class="site-block-tab">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-football-tab" data-toggle="pill" href="#pills-football" role="tab" aria-controls="pills-football" aria-selected="true">Football</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-basketball-tab" data-toggle="pill" href="#pills-basketball" role="tab" aria-controls="pills-basketball" aria-selected="false">Basketball</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-cricket-tab" data-toggle="pill" href="#pills-cricket" role="tab" aria-controls="pills-cricket" aria-selected="false">Cricket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-kabaddi-tab" data-toggle="pill" href="#pills-kabaddi" role="tab" aria-controls="pills-kabaddi" aria-selected="false">Kabaddi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-volleyball-tab" data-toggle="pill" href="#pills-volleyball" role="tab" aria-controls="pills-volleyball" aria-selected="false">Volleyball</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-khokho-tab" data-toggle="pill" href="#pills-khokho" role="tab" aria-controls="pills-khokho" aria-selected="false">kho-kho</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-tabletennis-tab" data-toggle="pill" href="#pills-tabletennis" role="tab" aria-controls="pills-tabletennis" aria-selected="false">Table Tennis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-badminton-tab" data-toggle="pill" href="#pills-badminton" role="tab" aria-controls="pills-badminton" aria-selected="false">Badminton</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-carrom-tab" data-toggle="pill" href="#pills-carrom" role="tab" aria-controls="pills-carrom" aria-selected="false">Carrom</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-longjump-tab" data-toggle="pill" href="#pills-longjump" role="tab" aria-controls="pills-longjump" aria-selected="false">Long Jump </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-athletics-tab" href="atheletics.php" role="tab" aria-controls="pills-athletics" aria-selected="false">Athletics </a>
            </li>
          </ul>


          <div class="tab-content" id="pills-tabContent">

            <!-- football -->
            <div class="tab-pane fade show active" id="pills-football" role="tabpanel" aria-labelledby="pills-football">
              <!-- Next Match -->


              <div id="" onload="football()"></div>
              <div class="" id="football"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%football%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '
                  <a href="./matches.php?game_name=football">
                  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>
                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ' : ' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0 : 0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>
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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->

              </div>
            </div>

            <!-- Basketball -->
            <div class="tab-pane fade" id="pills-basketball" role="tabpanel" aria-labelledby="pills-basketball">
              <!-- Next Match -->


              <div id="" onload="basketball()"></div>
              <div class="" id="basketball"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%basketball%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo ' <a href="./matches.php?game_name=basketball">  
                  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>

                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                    
                }
                ?>
                <!-- END row -->
              </div>
            </div>

            <!-- Cricket -->
            <div class="tab-pane fade" id="pills-cricket" role="tabpanel" aria-labelledby="pills-cricket">
              <!-- Next Match -->


              <div id="" onload="cricket()"></div>
              <div class="" id="cricket"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%Cricket%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<a href="./matches.php?game_name=Cricket">  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>

                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                          
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->  

              </div>
            </div>

            <!-- Kabaddi -->
            <div class="tab-pane fade" id="pills-kabaddi" role="tabpanel" aria-labelledby="pills-kabaddi">
              <!-- Next Match -->


              <div id="" onload="kabaddi()"></div>
              <div class="" id="kabaddi"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%kabaddi%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<a href="./matches.php?game_name=kabaddi">  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>

                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;

                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->

              </div>
            </div>

            <!-- volleyball -->
            <div class="tab-pane fade" id="pills-volleyball" role="tabpanel" aria-labelledby="pills-volleyball">
              <!-- Next Match -->


              <div id="" onload="volleyball()"></div>
              <div class="" id="volleyball"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%volleyball%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<a href="./matches.php?game_name=volleyball">  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>

                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->

              </div>
            </div>

            <!-- khokho -->
            <div class="tab-pane fade" id="pills-khokho" role="tabpanel" aria-labelledby="pills-khokho">
              <!-- Next Match -->

              <div id="" onload="khokho()"></div>
              <div class="" id="khokho"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%KHO-KHO%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<a href="./matches.php?game_name=KHO-KHO">  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>

                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->

              </div>
            </div>

            <!-- table tennis -->

            <div class="tab-pane fade" id="pills-tabletennis" role="tabpanel" aria-labelledby="pills-tabletennis">
              <!-- Next Match -->

              <div id="" onload="tabletennis()"></div>
              <div class="" id="tabletennis"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%TABLE TENNIS%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<a href="./matches.php?game_name=TABLE TENNIS">  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>

                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->

              </div>
            </div>

            <!-- badminton -->

            <div class="tab-pane fade" id="pills-badminton" role="tabpanel" aria-labelledby="pills-badminton">
              <!-- Next Match -->

              <div id="" onload="badminton()"></div>
              <div class="" id="badminton"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%BADMINTON%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<a href="./matches.php?game_name=BADMINTON">   <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>

                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->

              </div>
            </div>

            <!-- Carrom -->

            <div class="tab-pane fade" id="pills-carrom" role="tabpanel" aria-labelledby="pills-carrom">
              <!-- Next Match -->

              <div id="" onload="carrom()"></div>
              <div class="" id="carrom"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%CARROM%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<a href="./matches.php?game_name=CARROM">  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>

                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->

              </div>
            </div>

            <!-- longjump -->
            <div class="tab-pane fade" id="pills-longjump" role="tabpanel" aria-labelledby="pills-longjump">
              <!-- Next Match -->

              <div id="" onload="longjump()"></div>
              <div class="" id="longjump"></div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%LONG JUMP%' ORDER BY 'match_id' DESC LIMIT 5");
                while ($row = mysqli_fetch_array($fetch_all_Games)) {
                  $match_id = $row['match_id'];
                  $team_1 = $row['team_1'];
                  $team_2 = $row['team_2'];
                  $game_type = $row['game_type'];
                  $date_time = $row['date_time'];
                  echo '<a href="./matches.php?game_name=LONG JUMP">  <div class="col-md-12">
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
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $game_type . '</small></p>
                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">';
                  $check2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                  if ($check2 > 0) {
                    $score2 =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id = '$match_id'")))[0] . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                  } else {
                    $score2 = "0:0";
                  }
                  echo $score2;
                  echo '</span>
                  </div>
                  <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>

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
                    </a>
                    </div>';
                }
                ?>
                <!-- END row -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Carousel -->
<div class="site-section" data-aos="fade-up">
  <div class="slide-one-item owl-carousel">
    <div class="bg-image center" style="background-image: url('./assets/images/Slider/1.jpg'); "></div>
    <div class="bg-image center" style="background-image: url('./assets/images/Slider/2.jpg'); "></div>
    <div class="bg-image center" style="background-image: url('./assets/images/Slider/3.jpg'); "></div>
    <div class="bg-image center" style="background-image: url('./assets/images/Slider/4.jpg'); "></div>
  </div>
</div>

<!-- Chairperson’s Message  -->
<div class="site-section" data-aos="fade-up" style="margin-bottom:-108px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 ">
        <img src="./assets/images/main.png" alt="Image" class="img-fluid" style="margin-bottom:20px;">
      </div>
      <div class="col-md-6 pr-md-5 order-2" style="margin-bottom:70px;">
        <h2 class="text-black">Chancellor’s Message</h2>
        <h5><b>“The will to win is important, but the will to prepare is essential” - Prof. (Dr.) Balvir S. Tomar</b></h5>
        <p class="lead text-justify">
          To all the participants, I want to remind you that winning isn't everything. It's the spirit of the game that counts, and the joy of participating and pushing yourself beyond limits. So, go out there and give it your all. Play fair, respect your opponents, and most importantly, have fun!
          So, let’s come together, enjoy each other’s company, and make this Sports fest a huge success! I wish all the teams best of luck.
        </p>

        <h5 class="text-black font-weight-bold" style="text-align:end;">-Prof. (Dr.) Balvir S. Tomar</h5>
        <h5 class="text-black font-weight-bold" style="text-align:end;">Chairperson and Chancellor</h5>
        <h5 class="text-black font-weight-bold" style="text-align:end;">NIMS University Rajasthan, Jaipur</h5>
      </div>
    </div>
  </div>
</div>



<!-- More About Teams -->
<div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('assets/images/game4.jpg');" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-white">About Teams</h2>
      </div>
    </div>

    <div class="row">
      <div class="nonloop-block-13 owl-carousel">
        <?php
        $fetch_collage = mysqli_query($conn, "SELECT * FROM `collage_data`");
        while ($row = mysqli_fetch_array($fetch_collage)) {
          $collage_name = $row['collage_name'];
          $collage_logo = $row['collage_logo'];
          echo '<div class="item">
            <!-- uses .block-12 -->
            <div class="block-12">
              <figure>
                <img src="./admin/' . $collage_logo . '" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <span class="meta">May 20th 2018</span>
                <div class="text-inner">
                  <h2 class="heading mb-3"><a href="#" class="text-black">' . $collage_name . '</a></h2>
                </div>
              </div>
            </div>
          </div>';
        }
        ?>

      </div>
    </div>
  </div>

</div>

<!--  -->
<script>
  window.addEventListener("load", (event) => {
    football(), basketball(), cricket(), kabaddi(), volleyball(), khokho(), tabletennis(), badminton(), carrom(), longjump()
  });

  function football() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("football").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/football.php", true);
    xmlhttp.send();
  }

  function basketball() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("basketball").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/basketball.php", true);
    xmlhttp.send();
  }

  function cricket() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("cricket").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/cricket.php", true);
    xmlhttp.send();
  }

  function kabaddi() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("kabaddi").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/kabaddi.php", true);
    xmlhttp.send();
  }

  function volleyball() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("volleyball").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/volleyball.php", true);
    xmlhttp.send();
  }

  function khokho() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("khokho").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/khokho.php", true);
    xmlhttp.send();
  }

  function tabletennis() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tabletennis").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/tabletennis.php", true);
    xmlhttp.send();
  }

  function badminton() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("badminton").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/badminton.php", true);
    xmlhttp.send();
  }

  function carrom() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("carrom").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/carrom.php", true);
    xmlhttp.send();
  }

  function longjump() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("longjump").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/longjump.php", true);
    xmlhttp.send();
  }

  setInterval(function() {
    football(), basketball(), cricket(), kabaddi(), volleyball(), khokho(), tabletennis(), badminton(), carrom(), longjump()

  }, 3000);
</script>

<!-- SCORE TIME -->


<!-- Footer -->
<?php include('./components/footer.php') ?>


</body>

</html>