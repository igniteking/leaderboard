<?php
if (isset($_SESSION['email'])) {
} else {
	echo "<meta http-equiv=\"refresh\" content=\"0; url=./helpers/logout.php\">";
	exit();
}
?>
<nav class="pcoded-navbar menu-light ">
	<div class="navbar-wrapper  ">
		<div class="navbar-content scroll-div ">

			<div class="">
				<div class="main-menu-header">
					<img class="img-radius" src="assets/images/logo-bg.png" alt="User-Profile-Image">
					<div class="user-details">
						<div id="more-details">Options <i class="fa fa-caret-down"></i></div>
					</div>
				</div>
				<div class="collapse" id="nav-user-link">
					<ul class="list-unstyled">
						<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
						<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
						<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
					</ul>
				</div>
			</div>

			<ul class="nav pcoded-inner-navbar ">
				<li class="nav-item pcoded-menu-caption">
					<label>Main</label>
				</li>
				<li class="nav-item">
					<a href="./index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
				</li>
				<li class="nav-item">
					<a href="./user_management.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">User Management</span></a>
				</li>
				<li class="nav-item">
					<a href="./game_management.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Game Management</span></a>
				</li>
				<li class="nav-item">
					<a href="./collage_management.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Collage Management</span></a>
				</li>
				<li class="nav-item pcoded-menu-caption">
					<label>Match Management</label>
				</li>
				<li class="nav-item">
					<a href="./match_management.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Match Management</span></a>
				</li>
				<li class="nav-item pcoded-menu-caption">
					<label>Settings</label>
				</li>
				<li class="nav-item active">
					<a href="./helpers/logout.php" class="nav-link bg-danger"><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a>
				</li>
			</ul>

		</div>
	</div>
</nav>