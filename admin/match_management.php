<?php include('./connections/connection.php'); ?>
<?php include('./components/header.php'); ?>
<?php include('./connections/global.php'); ?>
<?php include('./connections/functions.php'); ?>

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
                <div class="col-xl-6 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Match List</h5>
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
                        <div class="card-body p-0">
                            <div id="notification"></div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Match</th>
                                            <th>Team 1</th>
                                            <th>Team 2</th>
                                            <th>Date Time</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `match_data`");
                                        while ($row = mysqli_fetch_array($fetch_all_Games)) {
                                            $match_id = $row['match_id'];
                                            $team_1 = $row['team_1'];
                                            $team_2 = $row['team_2'];
                                            $game_type = $row['game_type'];
                                            $date_time = $row['date_time'];
                                            echo '<tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block">
                                                        <h6 class="text-truncate" style="max-width: 150px;">' . $team_1 . '</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block">
                                                        <h6 class="text-truncate" style="max-width: 250px;">' . $team_2 . '</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block">
                                                        <h6 class="text-truncate" style="max-width: 250px;">' . $game_type . '</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block">
                                                        <h6 class="text-truncate" style="max-width: 250px;">' . $date_time . '</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                            <button onclick="deleteGame(' . $match_id . ')" class="btn badge badge-light-danger">Delete</button>
                                            </td>
                                        </tr>';
                                        }
                                        ?>
                                    </tbody>
                                    <script>
                                        function deleteGame(id) {
                                            if (id.length == 0) {
                                                document.getElementById("notification").innerHTML = "";
                                                return;
                                            } else {
                                                var xmlhttp = new XMLHttpRequest();
                                                xmlhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        document.getElementById("notification").innerHTML = this.responseText;
                                                    }
                                                };
                                                xmlhttp.open("GET", "./helpers/delete_game.php?game_id=" + id);
                                                xmlhttp.send();
                                            }
                                        }
                                    </script>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- prject ,team member start -->

                <!-- Latest Customers start -->
                <div class="col-lg-6 col-md-12">
                    <div class="card table-card review-card">
                        <div class="card-header">
                            <h5>Add Match Data</h5>
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
                            if (@$_POST['insert_match_record']) {
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
                            <form action="./match_management.php" method="post" enctype="multipart/form-data">
                                <div class="">
                                    <div class="card-body m-3">
                                        <div class="row">
                                            <div class="col-sm-6 justify-content-left">
                                                <div class="form-group">
                                                    <label for="browser">Team 1</label>
                                                    <input list="collage_name" name="collage1" class="form-control" id="collage1">
                                                    <datalist id="collage_name">
                                                        <?php
                                                        $fetch_all_teams = mysqli_query($conn, "SELECT * FROM `collage_data`");
                                                        while ($row = mysqli_fetch_array($fetch_all_teams)) {
                                                            $collage_name = $row['collage_name'];
                                                            echo '<option value="' . $collage_name . '">' . $collage_name . '</option>';
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 justify-content-left">
                                                <div class="form-group">
                                                    <label for="browser">Team 2</label>
                                                    <input list="collage_name2" name="collage2" class="form-control" id="collage2">
                                                    <datalist id="collage_name2">
                                                        <?php
                                                        $fetch_all_teams = mysqli_query($conn, "SELECT * FROM `collage_data`");
                                                        while ($row = mysqli_fetch_array($fetch_all_teams)) {
                                                            $collage_name = $row['collage_name'];
                                                            echo '<option value="' . $collage_name . '">' . $collage_name . '</option>';
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="justify-content-left">
                                            <div class="form-group">
                                                <label for="browser">Game</label>
                                                <input list="games" name="game" class="form-control" id="game">
                                                <datalist id="games">
                                                    <?php
                                                    $fetch_all_games = mysqli_query($conn, "SELECT * FROM `game_data`");
                                                    while ($row = mysqli_fetch_array($fetch_all_games)) {
                                                        $game_name = $row['game_name'];
                                                        $game_type = $row['game_type'];
                                                        echo '<option value="' . $game_name . ' / ' . $game_type . '">' . $game_name . ' / ' . $game_type . '</option>';
                                                    }
                                                    ?>
                                                </datalist>
                                            </div>
                                        </div><br>
                                        <div class="justify-content-left">
                                            <div class="form-group">
                                                <label for="browser">Date / Time For the Game</label>
                                                <input type="datetime-local" class="form-control" name="date_time" id="inputgroupFile01">
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