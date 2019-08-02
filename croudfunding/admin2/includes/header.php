<?php
include_once(dirname(__FILE__)."/../vendor.php");
$menu= $linkmanager->getLinks($session->access->access);
//varPrint($menu);
?>

<!doctype html>
<html lang="en">
	<head>
		<title>E-DISHA</title>
		<meta charset="utf-8">
		<base  href="<?php echo base_url(); ?>"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="assets\vendor\bootstrap\css\bootstrap.min.css">
		<link rel="stylesheet" href="assets\vendor\font-awesome\css\font-awesome.min.css">
		<link rel="stylesheet" href="assets\vendor\themify-icons\css\themify-icons.css">
		<link rel="stylesheet" href="assets\vendor\pace\themes\orange\pace-theme-minimal.css">
		  <link rel="stylesheet" href="assets\vendor\bootstrap-datepicker\css\bootstrap-datepicker3.min.css">
		<link rel="stylesheet" href="assets\vendor\summernote\summernote.css">
		<link rel="stylesheet" href="assets\vendor\bootstrap-markdown\bootstrap-markdown.min.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="assets\css\main.min.css">
		<link rel="stylesheet" href="assets\css\skins\sidebar-nav-darkgray.css" type="text/css">
		<link rel="stylesheet" href="assets\css\skins\navbar3.css" type="text/css">
		<!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project link rel="stylesheet" href="assets\css\demo.min.css">
		<link rel="stylesheet" href="demo-panel\style-switcher.css"> -->
		<!-- ICONS -->
		<!--<link rel="apple-touch-icon" sizes="76x76" href="assets\img\apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets\img\favicon.png">
	</head>
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="brand" style="position: initial;">
					<a href="dashboard.php"><
						<h3 style="color: white;">CroudFunding</h3>
					</a>
				</div>
				<div class="container-fluid">
					<div id="tour-fullwidth" class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
					</div>
					<form class="navbar-form navbar-left search-form">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
					<div id="navbar-menu">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#" class="btn-toggle-rightsidebar">
									<i class="ti-layout-sidebar-right"></i>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
									<i class="ti-bell"></i>
									<span class="badge bg-danger">5</span>
								</a>
								<ul class="dropdown-menu notifications">
									<li>You have 5 new notifications</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-hdd-o custom-bg-red"></i>
											<p>
												<span class="text">System space is almost full</span>
												<span class="timestamp">11 minutes ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-tasks custom-bg-yellow"></i>
											<p>
												<span class="text">You have 9 unfinished tasks</span>
												<span class="timestamp">20 minutes ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-book custom-bg-green2"></i>
											<p>
												<span class="text">Monthly report is available</span>
												<span class="timestamp">1 hour ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-bullhorn custom-bg-purple"></i>
											<p>
												<span class="text">Weekly meeting in 1 hour</span>
												<span class="timestamp">2 hours ago</span>
											</p>
										</a>
									</li>
									<li>
										<a href="#" class="notification-item">
											<i class="fa fa-check custom-bg-green"></i>
											<p>
												<span class="text">Your request has been approved</span>
												<span class="timestamp">3 days ago</span>
											</p>
										</a>
									</li>
									<li><a href="#" class="more">See all notifications</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help"></i> <span class="hide">Help</span></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="ti-direction"></i> Basic Use</a></li>
									<li><a href="#"><i class="ti-server"></i> Working With Data</a></li>
									<li><a href="#"><i class="ti-lock"></i> Security</a></li>
									<li><a href="#"><i class="ti-light-bulb"></i> Troubleshooting</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="logout.php" class="dropdown-toggle" data-toggle="dropdown">
									
																	</a>
								
									<li><a href="logout.php"><i class="ti-power-off"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- LEFT SIDEBAR -->

			<div id="sidebar-nav" class="sidebar">
				<nav>
					<ul class="nav" id="sidebar-nav-menu">
						<li class="menu-group">Main</li>
					<!--	<li class="panel">
							<a href="#dashboards" data-toggle="collapse" data-parent="#sidebar-nav-menu"  class="collapsed" ><i class="ti-dashboard"></i> <span class="title">Home Page</span></a>
							<div id="dashboards" class="collapse ">
								<ul class="submenu">
									<li><a href="add_slider.php" >Add Slider </a></li>
									<li><a href="view_slider.php" >View Slider </a></li>
									<li><a href="add_helpus.php">Help Us</a></li>
									<li><a href="view_helpus.php" >View Help Us</a></li>
									<li><a href="add_our_gallery.php">Gallery</a></li>
									<li><a href="view_gallery.php">View Gallery</a></li>
									<li><a href="add_says.php">Testimonial</a></li>          <li><a href="view_says.php">View Testinomial</a></li>
									<li><a href="add_our_sponsors.php">Sponsors</a></li>
									<li><a href="view_sponsor.php">View Sponsors</a></li>
									
									
									
								</ul>         
							</div>       
						</li>  
						<li class="panel">
							<a href="#subLayouts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout"></i> <span class="title">Fund</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="subLayouts" class="collapse ">
								<ul class="submenu">
									
									<li><a href="add_cause.php ">Add Cause</a></li>
									<li><a href="viewcauses.php ">View Cause</a></li>
									<li><a href="layout-default.html">Default</a></li>
									<li><a href="layout-grid.html">Grid</a></li>
								</ul>
							</div>
						</li>    -->
						 <?php foreach($menu as $key=>$mg){ 
                    
                    	  $hasmenu = FALSE;
                    	
                         ?>
                         
						<li class="panel">
							<a href="#forms<?php echo str_replace(' ', '', $key); ?>" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed" class="active"><i class="ti-receipt"></i> <span class="title"><?php echo $mg['menugroup']; ?></span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="forms<?php echo str_replace(' ', '', $key); ?>" class="collapse ">
								<ul class="submenu">
								 <?php foreach($mg['data'] as $dat){?>
									<li><a href="<?php echo $dat->link; ?>"><?php echo $dat->linkname; ?></a></li>
								  <?php } ?>	
								</ul>
							</div>
						</li>
						<?php }?>
						
						
					</ul>
					<button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
				</nav>
			</div>
			<div class="main">
			<!-- END LEFT SIDEBAR -->