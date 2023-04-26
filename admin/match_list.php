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
                <div class="col-xl-12 col-md-12">
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
                        <form action="./match_list.php" method="get">
                            <input type="text" name="game_name" id="" class="form-control" onblur="this.form.submit()" placeholder="Search Game Type">
                        </form>
                        <div class="card-body p-0">
                            <div id="notification"></div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Team 1</th>
                                            <th>Team 2</th>
                                            <th>Status</th>
                                            <th>Game</th>
                                            <th>Date Time</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $game_name = @$_GET['game_name'];
                                        if ($game_name) {
                                            $fetch_all_Games = mysqli_query($conn, "SELECT * FROM match_data WHERE game_type LIKE '%$game_name%'");
                                        } else {
                                            $fetch_all_Games = mysqli_query($conn, "SELECT * FROM match_data ORDER BY match_id DESC");
                                        }
                                        while ($row = mysqli_fetch_array($fetch_all_Games)) {
                                            $match_id = $row['match_id'];
                                            $team_1 = $row['team_1'];
                                            $team_2 = $row['team_2'];
                                            $game_status = $row['game_status'];
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
                                                        <h6 class="text-truncate" style="max-width: 250px;">' . $game_status . '</h6>
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
                                            <a href="./score.php?match_id=' . $match_id . '"><button class="btn btn-outline-primary">Update Score</button></a>
                                            </td>
                                        </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- prject ,team member start -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    <?php include('./components/scripts.php'); ?>