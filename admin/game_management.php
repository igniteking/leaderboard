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
                            <h5>Game List</h5>
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
                                            <th>
                                                Game
                                            </th>
                                            <th>Description</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $fetch_all_Games = mysqli_query($conn, "SELECT * FROM `game_data`");
                                        while ($row = mysqli_fetch_array($fetch_all_Games)) {
                                            $game_id = $row['game_id'];
                                            $game_name = $row['game_name'];
                                            $game_description = $row['game_description'];
                                            $game_logo = $row['game_logo'];
                                            echo '<tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="' . $game_logo . '" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>' . $game_name . '</h6>
                                                        <p class="text-muted m-b-0 text-truncate" style="max-width: 150px;">' . $game_name . '</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-truncate" style="max-width: 150px;">' . $game_description . '</td>
                                            <td class="text-right">
                                            <button onclick="deleteGame(' . $game_id . ')" class="btn badge badge-light-danger">Delete</button>
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
                            <h5>Add Game Data</h5>
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
                            if (@$_POST['inser_game_record']) {
                                $game_name = $_POST['game_name'];
                                $game_description = $_POST['game_description'];
                                $game_type = $_POST['game_type'];
                                $created_at = date('Y-m-d H:i:s');

                                // Looping all files
                                $length = 10;
                                $random = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
                                $folder = mkdir("./demo/game_logo/$random");
                                $target_dir = "./demo/game_logo/$random/";

                                $game_logo = $_FILES['game_logo']['name'];
                                // Upload file
                                $array_content =  move_uploaded_file(@$_FILES['game_logo']['tmp_name'], $target_dir . $game_logo);

                                $path = $target_dir . $game_logo;

                                $insert_game_record = mysqli_query($conn, "INSERT INTO `game_data`(`game_id`, `game_name`, `game_description`, `game_type`, `game_logo`, `created_at`) VALUES (NULL,'$game_name','$game_description', '$game_type','$path','$created_at')");
                                if ($insert_game_record) {
                                    Notifications("success", "Successfully", "Inserted!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./game_management.php\">";
                                } else {
                                    Notifications("danger", "Error", "Inserting Record!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./game_management.php\">";
                                }
                            }
                            ?>
                            <form action="./game_management.php" method="post" enctype="multipart/form-data">
                                <div class="">
                                    <div class="card-body m-3">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Game's Name" name="game_name" aria-label="Username" aria-describedby="basic-addon1">
                                        </div><br>
                                        <div class="input-group">
                                            <select class="form-control" name="game_description" id="game_type">
                                                <option value="Group">Group</option>
                                                <option value="Solo">Solo</option>
                                                <option value="Doubles">Doubles</option>
                                            </select>
                                        </div><br>
                                        <div class="input-group">
                                            <select class="form-control" name="game_type" id="game_type">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="mix">Mix Doubles</option>
                                            </select>
                                        </div><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Game's Logo</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="game_logo" id="inputgroupFile01">
                                                <label class="custom-file-label" for="inputgroupFile01">Choose file</label>
                                            </div>
                                        </div><br>
                                        <div class="input-group">
                                            <input type="submit" value="Insert Record" name="inser_game_record" class="btn btn-primary col-md-12">
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