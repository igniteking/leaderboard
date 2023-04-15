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
				<!-- <li class="nav-item pcoded-hasmenu">
					<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
					<ul class="pcoded-submenu">
						<li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
						<li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
					</ul>
				</li> -->
				<li class="nav-item pcoded-menu-caption">
					<label>Games</label>
				</li>
				<li class="nav-item">
					<a href="./games_add.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Add Games</span></a>
				</li>
			</ul>

		</div>
	</div>
</nav>