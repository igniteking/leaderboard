<?php include('./connections/connection.php'); ?>
<?php include('./components/header.php'); ?>
<?php include('./connections/global.php'); ?>
<?php include('./connections/functions.php');
$match_id = $_GET['match_id'];
$fetch_data = mysqli_query($conn, "SELECT * FROM `match_data` WHERE match_id = '$match_id'");
while ($row = mysqli_fetch_array($fetch_data)) {
    $match_id = $row['match_id'];
    $team_1 = $row['team_1'];
    $team_2 = $row['team_2'];
    $game_type = $row['game_type'];
    $date_time = $row['date_time'];
}
?>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <?php include('./components/sidebar.php'); ?>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <?php include('./components/top_bar.php'); ?>
    <!-- [ Header ] end -->
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard Analytics</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- prject ,team member start -->
                <div class="col-lg-6 col-md-12">
                    <div class="card user-card2">
                        <div class="card-body text-center">
                            <h6 class="m-b-15"><?= $team_1 ?></h6>
                            <div class="risk-rate">
                                <img src="<?php echo array_values(mysqli_fetch_array($conn->query("SELECT collage_logo FROM `collage_data` WHERE collage_name='$team_1'")))[0]; ?>" alt="" srcset=""></b></span>
                            </div>
                            <br>
                            <h6 class="m-b-10 m-t-10 mt-4"><?= $date_time ?></h6>
                            <a href="#!" class="text-c-green b-b-success"></a>
                            <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                                <div class="col m-t-15 b-r-default">
                                    <h6 class="text-muted">Score</h6>
                                    <h6><?php
                                        $check =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                                        if ($check > 0) {
                                            echo $team_name =  array_values(mysqli_fetch_array($conn->query("SELECT team_1 FROM `score_data` WHERE match_id='$match_id'")))[0];
                                        } else {
                                            $team_name = ".";
                                        }
                                        ?></h6>
                                </div>
                                <div class="col m-t-15">
                                    <h6 class="text-muted">Game Type</h6>
                                    <h6><?= $game_type ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card user-card2">
                        <div class="card-body text-center">
                            <h6 class="m-b-15"><?= $team_2 ?></h6>
                            <div class="risk-rate">
                                <img src="<?php echo array_values(mysqli_fetch_array($conn->query("SELECT collage_logo FROM `collage_data` WHERE collage_name='$team_1'")))[0]; ?>" alt="" srcset=""></b></span>
                            </div>
                            <h6 class="m-b-10 m-t-10 mt-4"><?= $date_time ?></h6>
                            <a href="#!" class="text-c-green b-b-success"></a>
                            <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                                <div class="col m-t-15 b-r-default">
                                    <h6 class="text-muted">Score</h6>
                                    <h6><?php
                                        $check =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                                        if ($check > 0) {
                                            echo $team_name =  array_values(mysqli_fetch_array($conn->query("SELECT team_2 FROM `score_data` WHERE match_id='$match_id'")))[0];
                                        } else {
                                            $team_name = ".";
                                        }
                                        ?></h6>
                                </div>
                                <div class="col m-t-15">
                                    <h6 class="text-muted">Game Type</h6>
                                    <h6><?= $game_type ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- prject ,team member start -->

                <!-- Latest Customers start -->
                <div class="col-lg-12 col-md-12">
                    <div class="card table-card review-card">
                        <div class="card-header">
                            <h5>Add Score Data</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="./Game_management.php"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            if (@$_POST['insert_score']) {
                                $team_1 = $_POST['team_1'];
                                $team_2 = $_POST['team_2'];
                                $score_id = $_POST['score_id'];
                                $created_at = date('Y-m-d H:i:s');
                                $check =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                                if ($check > 0) {
                                    $insert_match_record = mysqli_query($conn, "UPDATE `score_data` SET `team_1`='$team_1',`team_2`='$team_2' WHERE match_id = '$match_id'");
                                } else {
                                    $insert_match_record = mysqli_query($conn, "INSERT INTO `score_data`(`score_id`, `match_id`,`team_1`, `team_2`, `created_at`) VALUES (NULL,'$match_id','$team_1','$team_2', '$created_at')");
                                }
                                if ($insert_match_record) {
                                    Notifications("success", "Successfully", "Inserted!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./score.php?match_id=" . $match_id . "\">";
                                } else {
                                    Notifications("danger", "Error", "Inserting Record!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./score.php?match_id=" . $match_id . "\">";
                                }
                            }
                            ?>
                            <form action="./score.php?match_id=<?= $match_id ?>" method="post" enctype="multipart/form-data">
                                <div class="">
                                    <div class="card-body m-3">
                                        <div class="row">
                                            <div class="col-sm-6 justify-content-left">
                                                <div class="form-group">
                                                    <label for="browser">Team 1</label>
                                                    <input type="number" name="team_1" class="form-control" id="collage1">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 justify-content-left">
                                                <div class="form-group">
                                                    <label for="browser">Team 2</label>
                                                    <input type="number" name="team_2" class="form-control" id="collage2">
                                                </div>
                                            </div>
                                            <?php
                                            $check =  mysqli_num_rows(mysqli_query($conn, "SELECT * FROM score_data WHERE match_id = '$match_id'"));
                                            if ($check > 0) {
                                                echo  '<input type="hidden" name="score_id" value="' . array_values(mysqli_fetch_array($conn->query("SELECT score_id FROM `score_data` WHERE match_id='$match_id'")))[0] . '">';
                                            }
                                            ?>

                                        </div><br>
                                        <div class="input-group">
                                            <input type="submit" value="Insert Record" name="insert_score" class="btn btn-primary col-md-12">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Latest Customers end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    <?php include('./components/scripts.php'); ?>