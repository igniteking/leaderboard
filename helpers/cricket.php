<?php
include('../connections/connection.php');
// $match_id = @$_GET['match_id'];
// $match_id = 1;
// $checkGames = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `match_data` WHERE `match_id` = '$match_id'"));
// if ($checkGames > 0) {
$fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data` WHERE `game_status` = 'ongoing' AND `game_type` LIKE '%cricket%'");
while ($row = mysqli_fetch_array($fetch_all_Games)) {
    $match_id = $row['match_id'];
    $collage_1 = $row['team_1'];
    $collage_2 = $row['team_2'];
    $game_type = $row['game_type'];
    $date_time = $row['date_time'];
}
@$fetch_data = mysqli_query($conn, "SELECT * FROM `score_data` WHERE match_id = '$match_id'");
while ($row = mysqli_fetch_array($fetch_data)) {
    $team_1 = $row['team_1'];
    $team_2 = $row['team_2'];
    echo '
    <div class="bg-image overlay-success rounded mb-5" style="background-image: url("assets/images/game4.jpg");" data-stellar-background-ratio="0.5">
    <div class="row align-items-center">
    <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="text-center text-lg-left">
            <div class="d-block d-lg-flex align-items-center">
                <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                    <img src="./admin/' . array_values(mysqli_fetch_array($conn->query("SELECT collage_logo FROM `collage_data` WHERE collage_name='$collage_1'")))[0] . '" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                    <h3 class="h5 mb-0 text-black">' . $collage_1 . '</h3>
                    </div>
                    </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
        <div class="d-inline-block">
            <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">Spardha &mdash; Round 01</small></p>
            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">' . $team_1 . ':' . $team_2 . '</span></div>
            <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">' . $date_time . '</small></p>
            </div>
    </div>
    <div class="col-md-12 col-lg-4 text-center text-lg-right">
    <div class="">
            <div class="d-block d-lg-flex align-items-center">
            <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                    <img src="./admin/' . array_values(mysqli_fetch_array($conn->query("SELECT collage_logo FROM `collage_data` WHERE collage_name='$collage_2'")))[0] . '" alt="Image" class="img-fluid">
                </div>
                <div class="text order-1">
                    <h3 class="h5 mb-0 text-black">' . $collage_2 . '</h3>
                    </div>
            </div>
        </div>
        </div>
    </div>
</div>';

}

