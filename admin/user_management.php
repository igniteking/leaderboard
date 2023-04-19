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
                            <h5>User List</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
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
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th class="text-right">Action(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $fetch_user = mysqli_query($conn, "SELECT * FROM `user_data`");
                                        while ($row = mysqli_fetch_array($fetch_user)) {
                                            $user_id = $row['id'];
                                            $username = $row['username'];
                                            $email = $row['email'];
                                            $phone = $row['phone'];
                                            $profile_picture = $row['profile_picture'];
                                            echo '<tr>
                                            <td>
                                                <div class="d-inline-block align-middle">
                                                    <img src="./' . $profile_picture . '" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>' . $username . '</h6>
                                                        <p class="text-muted m-b-0">' . $email . '</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p class="text-muted m-b-0">' . $phone . '</p></td>
                                            <td class="text-right">
                                            <button onclick="deleteUser(' . $user_id . ')" class="btn badge badge-light-danger">Delete</button>
                                            </td>
                                        </tr>';
                                        }
                                        ?>
                                    </tbody>
                                    <script>
                                        function deleteUser(id) {
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
                                                xmlhttp.open("GET", "./helpers/delete_user.php?user_id=" + id);
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
                        <div class="card-header borderless ">
                            <h5>Add User</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            if (@$_POST['register']) {
                                $user_username = $_POST['username'];
                                $user_email = $_POST['email'];
                                $user_mobile = $_POST['mobile'];
                                $user_password = $_POST['password'];
                                $r_pswd = @$_POST['r_pswd'];
                                $email = @$_POST['email'];
                                $profile_picture = $_POST['profile_picture'];
                                $date = date("Y-m-d H:i:s");
                                Register("admin", $user_username, $user_mobile, $user_password, $r_pswd, $conn, $user_email, $profile_picture, $date);
                                if (@$_GET['status'] == 1) {
                                    Notifications("success", "Successfully", "Inserted!");
                                    echo "<meta http-equiv=\"refresh\" content=\"2; url=./user_management.php\">";
                                }
                            }
                            ?>
                            <form action="./user_management.php" method="post" enctype="multipart/form-data">
                                <div class="">
                                    <div class="card-body m-3">
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Admin's Username" name="username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div><br>
                                        <div class="input-group mb-4">
                                            <input type="text" class="form-control" placeholder="Admin's E-mail" name="email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                                            </div>
                                        </div><br>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+91</span>
                                            </div>
                                            <input type="text" class="form-control" name="mobile" aria-label="Amount (to the nearest dollar)">
                                        </div><br>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">*</span>
                                            </div>
                                            <input type="text" class="form-control col-md-6" placeholder="Admin's Passwrod" name="password" aria-label="Username" aria-describedby="basic-addon1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">*</span>
                                            </div>
                                            <input type="passwrod" class="form-control col-md-6" placeholder="Re-Type Admin's Passwrod" name="r_pswd" aria-label="Username" aria-describedby="basic-addon1">
                                        </div><br>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">User's Profile Picture</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="profile_picture" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div><br>
                                        <div class="input-group">
                                            <input type="submit" value="Insert Record" name="register" class="btn btn-primary col-md-12">
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