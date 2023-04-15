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
                <div class="col-lg-12 col-md-12">
                    <!-- support-section start -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0">Quick Analysis</h2>
                                    <p class="mb-3 mt-3">Total number of updates done in.</p>
                                </div>
                                <div id="support-chart"></div>
                                <div class="card-footer bg-primary text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <h4 class="m-0 text-white">01</h4>
                                            <span>Admin</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">16</h4>
                                            <span>Games</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">12</h4>
                                            <span>Teams</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card support-bar overflow-hidden">
                                <div class="card-body pb-0">
                                    <h2 class="m-0">Quick Analysis</h2>
                                    <p class="mb-3 mt-3">Total number of updates done in</p>
                                </div>
                                <div id="support-chart1"></div>
                                <div class="card-footer bg-success text-white">
                                    <div class="row text-center">
                                        <div class="col">
                                            <h4 class="m-0 text-white">2</h4>
                                            <span>On-Going</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">Management</h4>
                                            <span>Winning Team</span>
                                        </div>
                                        <div class="col">
                                            <h4 class="m-0 text-white">3</h4>
                                            <span>Matches</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- support-section end -->
                </div>
                <!-- prject ,team member start -->
                <div class="col-xl-5 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Admins</h5>
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
                                        <tr>
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
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>Zaidan Khan</h6>
                                                        <p class="text-muted m-b-0">Web Designer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Mashable</td>
                                            <td>March, 31</td>
                                            <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>Zaidan Khan</h6>
                                                        <p class="text-muted m-b-0">Developer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Flatable</td>
                                            <td>Aug, 02</td>
                                            <td class="text-right"><label class="badge badge-light-success">medium</label></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="chk-option">
                                                    <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                                <div class="d-inline-block align-middle">
                                                    <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                    <div class="d-inline-block">
                                                        <h6>Zaidan Khan</h6>
                                                        <p class="text-muted m-b-0">Developer</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Guruable</td>
                                            <td>Sep, 22</td>
                                            <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                                        </tr>
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
                            <h5>Customer Reviews</h5>
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
                        <div class="card-body">
                            <div class="review-block">
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-15">Zaidan khan <span class="float-right f-13 text-muted"> a week ago</span></h6>
                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                            took a
                                            galley of type and scrambled it to make a type specimen book.</p>
                                        <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                        <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                        <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-auto p-r-0">
                                        <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-15">Zaidan khan <span class="float-right f-13 text-muted"> a week ago</span></h6>
                                        <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                                        <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                            took a
                                            galley of type and scrambled it to make a type specimen book.</p>
                                        <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                                        <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                                        <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                                        <blockquote class="blockquote m-t-15 m-b-0">
                                            <h6>Zaidan khan</h6>
                                            <p class="m-b-0 text-muted">Lorem Ipsum is simply dummy text of the industry.</p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right  m-r-20">
                                <a href="#!" class="b-b-primary text-primary">View all Customer Reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Latest Customers end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <?php include('./components/scripts.php'); ?>