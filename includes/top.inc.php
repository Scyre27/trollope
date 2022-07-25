<?php
// if (isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN'] != '') {
// } else {
// 	header('location:index.php');
// 	die();
// }
if (!isset($loggedInfo)) {
	header("Location: ./");
}
?>
<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADMIN DASHBOARD PAGE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/normalize.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
	<link rel="stylesheet" href="assets/css/flag-icon.min.css">
	<link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="src/css/styles.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<aside id="left-panel" class="left-panel">
		<div class=" user-profile px-30 py-15">
			<div class="text-center">
				<div class="image">
					<img src="images/avatar/1.jpg" class="avatar avatar-xxxl box-shadowed" alt="User Image">
				</div>
				<div class="info mt-20">
					<a class="dropdown-toggle px-20" data-toggle="dropdown" href="#" aria-expanded="false"><?php echo $loggedInfo['firstname'] ?></a>
					<div class="dropdown-menu" style="will-change: transform;">
						<a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
					</div>
				</div>
			</div>
			<ul class="list-inline profile-setting mt-20 mb-0 d-flex justify-content-center">
				<li class="pr-15"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Search"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
							<circle cx="11" cy="11" r="8"></circle>
							<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
						</svg></a></li>
				<li class="pr-15"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Notification"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
							<path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path>
						</svg></a></li>
				<li class="pr-15"><a href="chat.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
							<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
						</svg></a></li>
				<li><a href="logout.php" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
							<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
							<polyline points="16 17 21 12 16 7"></polyline>
							<line x1="21" y1="12" x2="9" y2="12"></line>
						</svg></a></li>
			</ul>
		</div>
		<nav class="navbar navbar-expand-sm navbar-default">
			<div id="main-menu" class="main-menu collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php if ($loggedInfo['admin'] == 1) { ?>
						<li class="menu-title">MENU</li>
						<li class="menu-item-has-children dropdown">
							<a href="dashboard.php">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass">
									<circle cx="12" cy="12" r="10"></circle>
									<polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
								</svg>
								DASHBOARD </a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="residential.php">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
									<line x1="8" y1="6" x2="21" y2="6"></line>
									<line x1="8" y1="12" x2="21" y2="12"></line>
									<line x1="8" y1="18" x2="21" y2="18"></line>
									<line x1="3" y1="6" x2="3" y2="6"></line>
									<line x1="3" y1="12" x2="3" y2="12"></line>
									<line x1="3" y1="18" x2="3" y2="18"></line>
								</svg>
								RESIDENTIAL </a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="office.php">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
									<line x1="8" y1="6" x2="21" y2="6"></line>
									<line x1="8" y1="12" x2="21" y2="12"></line>
									<line x1="8" y1="18" x2="21" y2="18"></line>
									<line x1="3" y1="6" x2="3" y2="6"></line>
									<line x1="3" y1="12" x2="3" y2="12"></line>
									<line x1="3" y1="18" x2="3" y2="18"></line>
								</svg>
								OFFICE </a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="retail.php">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
									<line x1="8" y1="6" x2="21" y2="6"></line>
									<line x1="8" y1="12" x2="21" y2="12"></line>
									<line x1="8" y1="18" x2="21" y2="18"></line>
									<line x1="3" y1="6" x2="3" y2="6"></line>
									<line x1="3" y1="12" x2="3" y2="12"></line>
									<line x1="3" y1="18" x2="3" y2="18"></line>
								</svg>
								RETAIL </a>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="events.php">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
									<path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
									<path d="M22 12A10 10 0 0 0 12 2v10z"></path>
								</svg>
								EVENTS </a>
						</li>
						<!--<li class="menu-item-has-children dropdown">
								<a href="coupon_master.php" > INDUSTRIAL </a>
							</li>
							<!--<li class="menu-item-has-children dropdown">
								<a href="contact_us.php" > CONTACT US</a>
							</li>-->
					<?php } ?>
				</ul>
			</div>
		</nav>
	</aside>
	<div id="right-panel" class="right-panel">
		<header id="header" class="header">
			<div class="top-left">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo"></a>
					<a class="navbar-brand hidden" href="index.php"><img src="images/logo.png" alt="Logo"></a>
					<a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
				</div>
			</div>




	</div>
	</header>