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
                <div class="col-xl-5 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Collage List</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="./collage_management.php"><i class="feather icon-refresh-cw"></i> reload</a></li>
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
                                                Collage
                                            </th>
                                            <th>Description</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $fetch_all_collages = mysqli_query($conn, "SELECT * FROM `collage_data`");
                                        while ($row = mysqli_fetch_array($fetch_all_collages)) {
                                            $collage_id = $row['collage_id'];
                                            $collage_short = $row['collage_short'];
                                            $collage_name = $row['collage_name'];
                                            $collage_description = $row['collage_description'];
                                            $collage_logo = $row['collage_logo'];
                                            echo '<tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="' . $collage_logo . '" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>' . $collage_short . '</h6>
                                                        <p class="text-muted m-b-0">' . $collage_name . '</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>' . $collage_description . '</td>
                                            <td class="text-right">
                                            <button onclick="deleteCollage(' . $collage_id . ')" class="btn badge badge-light-danger">Delete</button>
                                            </td>
                                        </tr>';
                                        }
                                        ?>
                                    </tbody>
                                    <script>
                                        function deleteCollage(id) {
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
                                                xmlhttp.open("GET", "./helpers/delete_collage.php?collage_id=" + id);
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
                <div class="col-lg-7 col-md-12">
                    <div class="card table-card review-card">
                        <div class="card-header">
                            <h5>Add Collage Data</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="./collage_management.php"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            if (@$_POST['inser_collage_record']) {
                                $collage_short = $_POST['collage_short'];
                                $collage_name = $_POST['collage_name'];
                                $collage_description = $_POST['collage_description'];
                                $created_at = date('Y-m-d H:i:s');

                                // Looping all files
                                $length = 10;
                                $random = substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
                                $folder = mkdir("./demo/collage_logo/$random");
                                $target_dir = "./demo/collage_logo/$random/";

                                $collage_logo = $_FILES['collage_logo']['name'];
                                // Upload file
                                $array_content =  move_uploaded_file(@$_FILES['collage_logo']['tmp_name'], $target_dir . $collage_logo);

                                $path = $target_dir . $collage_logo;

                                $insert_collage_record = mysqli_query($conn, "INSERT INTO `collage_data`(`collage_id`, `collage_short`, `collage_name`, `collage_description`, `collage_logo`, `created_at`) VALUES (NULL,'$collage_short','$collage_name','$collage_description','$path','$created_at')");
                                if ($insert_collage_record) {
                                    Notifications("success", "Successfully", "Inserted!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./collage_management.php\">";
                                } else {
                                    Notifications("danger", "Error", "Inserting Record!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./collage_management.php\">";
                                }
                            }
                            ?>
                            <form action="./collage_management.php" method="post" enctype="multipart/form-data">
                                <div class="">
                                    <div class="card-body m-3">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Collage's Short Name" name="collage_short" aria-label="Username" aria-describedby="basic-addon1">
                                        </div><br>
                                        <div class="input-group mb-4">
                                            <input type="text" class="form-control" placeholder="Collage's Full Name" name="collage_name" aria-label="Username" aria-describedby="basic-addon1">
                                        </div><br>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Collage's Description</span>
                                            </div>
                                            <textarea class="form-control" name="collage_description" aria-label="With textarea"></textarea>
                                        </div><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Collage's Logo</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="collage_logo" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div><br>
                                        <div class="input-group">
                                            <input type="submit" value="Insert Record" name="inser_collage_record" class="btn btn-primary col-md-12">
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