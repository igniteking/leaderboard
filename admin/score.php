<?php include('./connections/connection.php'); ?>
<?php include('./components/header.php'); ?>
<?php include('./connections/global.php'); ?>
<?php include('./connections/functions.php');
$match_id = $_GET['match_id'];
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
                    <div class="card table-card review-card bg-warning">
                        <div class="card-header">
                            <h5 class="text-white">Score</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="./score_management.php"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="<?php echo array_values(mysqli_fetch_array($conn->query("SELECT collage_logo FROM `collage_data` WHERE collage_id='2'")))[0]; ?>" class="rounded float-left ml-5 mt-3" width="150" alt="">
                                    <img src="<?php echo array_values(mysqli_fetch_array($conn->query("SELECT collage_logo FROM `collage_data` WHERE collage_id='2'")))[0]; ?>" class="rounded float-right mr-5 mt-3" width="150" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <span class="col-md-12 row">
                                    <h1 class="col-md-6 text-right">1</h1>
                                    <h1 class="col-md-6 text-left">1</h1>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- prject ,team member start -->

                <!-- Latest Customers start -->
                <div class="col-lg-6 col-md-12">
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
                            if (@$_POST['insert_score_record']) {
                                $collage1 = $_POST['collage1'];
                                $collage2 = $_POST['collage2'];
                                $game = $_POST['game'];
                                $date_time = $_POST['date_time'];
                                $created_at = date('Y-m-d H:i:s');

                                $insert_match_record = mysqli_query($conn, "INSERT INTO `match_data`(`match_id`, `team_1`, `team_2`, `game_type`,`date_time`, `created_at`) VALUES (NULL,'$collage1','$collage2','$game', '$date_time', '$created_at')");
                                if ($insert_match_record) {
                                    Notifications("success", "Successfully", "Inserted!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./match_management.php\">";
                                } else {
                                    Notifications("danger", "Error", "Inserting Record!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./match_management.php\">";
                                }
                            }
                            ?>
                            <form action="./score.php" method="post" enctype="multipart/form-data">
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
                                        </div><br>
                                        <div class="input-group">
                                            <input type="submit" value="Insert Record" name="insert_match_record" class="btn btn-primary col-md-12">
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