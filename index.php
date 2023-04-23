<!-- Connections Starts -->
<?php include('./connections/connection.php'); ?>

<?php include('./components/header.php'); ?>
<!-- Header Ends -->

<!-- Header Starts -->
<?php include('./components/carousel.php'); ?>
<!-- Header Ends -->
<br><br>
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
              <a class="nav-link" id="pills-football-tab" data-toggle="pill" href="#pills-basketball" role="tab" aria-controls="pills-basketball" aria-selected="false">Basketball</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-badminton-tab" data-toggle="pill" href="#pills-badminton" role="tab" aria-controls="pills-badminton" aria-selected="false">Badminton</a>
            </li>
          </ul>


          <div class="tab-content" id="pills-tabContent">
            
            <div class="tab-pane fade show active" id="pills-football" role="tabpanel" aria-labelledby="pills-football">


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

              <div class="bg-image overlay-success rounded mb-5" style="background-image: url('assets/images/game4.jpg');" data-stellar-background-ratio="0.5">
                <div id="score_update" onload="scoreUpdate()"></div>
              </div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%Football%'");
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
                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">' . array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id='$match_id'")))[0]  . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0] . '</span></div>
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
            <div class="tab-pane fade" id="pills-basketball" role="tabpanel" aria-labelledby="pills-basketball">


              <!-- Next Match -->
              <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
                <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                  Next match of Football
                  <div id="demo2"></div>
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

              <div class="bg-image overlay-success rounded mb-5" style="background-image: url('assets/images/game4.jpg');" data-stellar-background-ratio="0.5">
                <div id="score_update" onload="scoreUpdate()"></div>
              </div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%Basketball%'");
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
                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">' . array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id='$match_id'")))[0]  . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0] . '</span></div>
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
            <div class="tab-pane fade" id="pills-badminton" role="tabpanel" aria-labelledby="pills-badminton">


              <!-- Next Match -->
              <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
                <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                  Next match of Football
                  <div id="demo3"></div>
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

              <div class="bg-image overlay-success rounded mb-5" style="background-image: url('assets/images/game4.jpg');" data-stellar-background-ratio="0.5">
                <div id="score_update" onload="scoreUpdate()"></div>
              </div>

              <!-- Previous Matches -->
              <div class="row align-items-center">
                <?php
                $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE game_type LIKE '%Badminton%'");
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
                          <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">' . array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id='$match_id'")))[0]  . ':' . array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0] . '</span></div>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Chairperson’s Message  -->
<div class="site-section" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 ">
        <img src="./assets/images/main.png" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 pr-md-5 order-2">
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
        <h2 class="text-white">More About Our Teams</h2>
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


<script>
  window.addEventListener("load", (event) => {
    scoreUpdate();
  });

  function scoreUpdate() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("score_update").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./helpers/score_update.php");
    xmlhttp.send();
  }
  const element = document.getElementById("demo");
  setInterval(function() {
    scoreUpdate()
  }, 1000);
</script>

<!-- SCORE TIME -->
<script>
  var deadline_football = new Date("<?php
            $assignment_start_time = array_values(mysqli_fetch_array($conn->query("SELECT date_time FROM `match_data` WHERE match_id='1'")))[0];
            $start_date = substr("$assignment_start_time", 0, 10);
            $start_time = substr("$assignment_start_time", 11, 6);
            $start = $start_date . ' ' . $start_time;
            echo $newDate = date("d M Y h:i A", strtotime($start));
            ?>'").getTime();
  var x = setInterval(function() {
    var now = new Date().getTime();
    var t = deadline_football - now;
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);
    document.getElementById("demo").innerHTML = '<span class="countdown-block"><span class="label">0' + days + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Days </z></span>' + '<span class="countdown-block"><span class="label">0' + hours + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Hours </z></span>' + '<span class="countdown-block"><span class="label">' + minutes + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Minutes </z></span>' + '<span class="countdown-block"><span class="label">' + seconds + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Seconds </z></span>';
    if (t < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);

  var deadline_basketball = new Date("Apr 20, 2023 16:37:25:59").getTime();
  var x = setInterval(function() {
    var now = new Date().getTime();
    var t = deadline_basketball - now;
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);
    document.getElementById("demo2").innerHTML = '<span class="countdown-block"><span class="label">0' + days + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Days </z></span>' + '<span class="countdown-block"><span class="label">0' + hours + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Hours </z></span>' + '<span class="countdown-block"><span class="label">' + minutes + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Minutes </z></span>' + '<span class="countdown-block"><span class="label">' + seconds + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Seconds </z></span>';
    if (t < 0) {
      clearInterval(x);
      document.getElementById("demo2").innerHTML = "EXPIRED";
    }
  }, 1000);

  var deadline_badminton = new Date("Apr 21, 2023 19:37:25:59").getTime();
  var x = setInterval(function() {
    var now = new Date().getTime();
    var t = deadline_badminton - now;
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((t % (1000 * 60)) / 1000);
    document.getElementById("demo3").innerHTML = '<span class="countdown-block"><span class="label">0' + days + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Days </z></span>' + '<span class="countdown-block"><span class="label">0' + hours + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Hours </z></span>' + '<span class="countdown-block"><span class="label">' + minutes + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Minutes </z></span>' + '<span class="countdown-block"><span class="label">' + seconds + '</span><z style="all: initial; color: #b3b3b3; font-size: 24px; font-family: Roboto;"> Seconds </z></span>';
    if (t < 0) {
      clearInterval(x);
      document.getElementById("demo3").innerHTML = "EXPIRED";
    }
  }, 1000);
</script>
<!-- Footer -->
<?php include('./components/footer.php') ?>


</body>

</html>