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
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                Assigned
                                            </th>
                                            <th>Name</th>
                                            <th>Due Date</th>
                                            <th class="text-right">Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $fetch_user = mysqli_query($conn, "SELECT * FROM `user_data`");
                                        while ($row = mysqli_fetch_array($fetch_user)) {
                                            $username = $row['username'];
                                            $user_email = $row['user_email'];
                                            echo '<tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>Zaidan khan</h6>
                                                        <p class="text-muted m-b-0">Graphics Designer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Able Pro</td>
                                            <td>Jun, 26</td>
                                            <td class="text-right"><label class="badge badge-light-danger">Low</label></td>
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

                <!-- Latest Customers start -->
                <div class="col-lg-7 col-md-12">
                    <div class="card table-card review-card">
                        <div class="card-header borderless ">
                            <h5>Add User</h5>
                        </div>
                        <div class="card-body">
                            <form action="./user_management.php" method="post">
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
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
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