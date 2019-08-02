<!doctype html>
<html lang="en">
	<head>
		<title>Welcome to Klorofil Pro | Klorofil Pro - Bootstrap Admin Dashboard Template</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="assets\vendor\bootstrap\css\bootstrap.min.css">
		<link rel="stylesheet" href="assets\vendor\font-awesome\css\font-awesome.min.css">
		<link rel="stylesheet" href="assets\vendor\themify-icons\css\themify-icons.css">
		<link rel="stylesheet" href="assets\vendor\pace\themes\orange\pace-theme-minimal.css">
		<link rel="stylesheet" href="assets\css\vendor\animate\animate.min.css">
		<link rel="stylesheet" href="assets\vendor\bootstrap-progressbar\css\bootstrap-progressbar-3.3.4.min.css">
		<link rel="stylesheet" href="assets\vendor\x-editable\bootstrap3-editable\css\bootstrap-editable.css">
		<link rel="stylesheet" href="assets\vendor\bootstrap-tour\css\bootstrap-tour.min.css">
		<link rel="stylesheet" href="assets\vendor\jqvmap\jqvmap.min.css">
		<!-- MAIN CSS -->
		<link rel="stylesheet" href="assets\css\main.min.css">
		<link rel="stylesheet" href="assets\css\skins\sidebar-nav-darkgray.css" type="text/css">
		<link rel="stylesheet" href="assets\css\skins\navbar3.css" type="text/css">
		<!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
		<link rel="stylesheet" href="assets\css\demo.min.css">
		<link rel="stylesheet" href="demo-panel\style-switcher.css">
		<!-- ICONS -->
		<link rel="apple-touch-icon" sizes="76x76" href="assets\img\apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="assets\img\favicon.png">
	</head>
	<body>
		<!-- WRAPPER -->
		<div id="wrapper">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="brand">
					<a href="index.html">
						<img src="assets\img\logo-white.png" alt="Klorofil Pro Logo" class="img-responsive logo">
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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets\img\user.png" alt="Avatar">
									<span>Samuel</span>
								</a>
								<ul class="dropdown-menu logged-user-menu">
									<li><a href="#"><i class="ti-user"></i> <span>My Profile</span></a></li>
									<li><a href="appviews-inbox.html"><i class="ti-email"></i> <span>Message</span></a></li>
									<li><a href="#"><i class="ti-settings"></i> <span>Settings</span></a></li>
									<li><a href="page-lockscreen.html"><i class="ti-power-off"></i> <span>Logout</span></a></li>
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
						<li class="panel">
							<a href="#forms" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-receipt"></i> <span class="title">Forms</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="forms" class="collapse ">
								<ul class="submenu">
									<li><a href="forms-inputs.html">Inputs</a></li>
									<li><a href="forms-multiselect.html">Multiselect</a></li>
									<li><a href="forms-input-pickers.html">Input Pickers</a></li>
									<li><a href="forms-input-sliders.html">Input Sliders</a></li>
									<li><a href="forms-select2.html">Select2</a></li>
									<li><a href="forms-xeditable.html">In-place Editing</a></li>
									<li><a href="forms-dragdropupload.html">Drag and Drop Upload</a></li>
									<li><a href="forms-layouts.html">Form Layouts</a></li>
									<li><a href="forms-validation.html">Form Validation</a></li>
									<li><a href="forms-texteditor.html">Text Editor</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#appViews" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout-tab-window"></i> <span class="title">App Views</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="appViews" class="collapse ">
								<ul class="submenu">
									<li><a href="appviews-project-detail.html">Project Details</a></li>
									<li><a href="appviews-projects.html">Projects</a></li>
									<li><a href="appviews-inbox.html">Inbox <span class="badge">8</span></a></li>
									<li><a href="appviews-file-manager.html">File Manager</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#tables" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-layout-grid2"></i> <span class="title">Tables</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="tables" class="collapse ">
								<ul class="submenu">
									<li><a href="tables-static.html">Static Tables</a></li>
									<li><a href="tables-dynamic.html">Dynamic Tables</a></li>
								</ul>
							</div>
						</li>
						<li class="menu-group">Components</li>
						<li class="panel">
							<a href="#uiElements" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-panel"></i> <span class="title">UI Elements</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="uiElements" class="collapse ">
								<ul class="submenu">
									<li><a href="ui-sweetalert.html">Sweet Alert</a></li>
									<li><a href="ui-treeview.html">Tree View</a></li>
									<li><a href="ui-wizard.html">Wizard</a></li>
									<li><a href="ui-dragdrop-panel.html">Drag &amp; Drop Panel</a></li>
									<li><a href="ui-nestable.html">Nestable</a></li>
									<li><a href="ui-gauge.html">Gauge <span class="label label-success">NEW</span></a></li>
									<li><a href="ui-panels.html">Panels</a></li>
									<li><a href="ui-progressbars.html">Progress Bars</a></li>
									<li><a href="ui-tabs.html">Tabs</a></li>
									<li><a href="ui-buttons.html">Buttons <span class="label label-info">UPDATED</span></a></li>
									<li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
									<li><a href="ui-social-buttons.html">Social Buttons</a></li>
									<li><a href="ui-icons.html">Icons</a></li>
								</ul>
							</div>
						</li>
						<li class="panel">
							<a href="#charts" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-pie-chart"></i> <span class="title">Charts</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="charts" class="collapse ">
								<ul class="submenu">
									<li><a href="charts-chartjs.html">Chart.js</a></li>
									<li><a href="charts-chartist.html">Chartist</a></li>
									<li><a href="charts-flot.html">Flot Chart</a></li>
									<li><a href="charts-sparkline.html">Sparkline Chart</a></li>
								</ul>
							</div>
						</li>
						<li><a href="widgets.html"><i class="ti-widget"></i> <span class="title">Widgets</span></a></li>
						<li><a href="notifications.html"><i class="ti-bell"></i> <span class="title">Notifications</span> <span class="badge">15</span></a></li>
						<li class="panel">
							<a href="#maps" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-map"></i> <span class="title">Maps</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="maps" class="collapse ">
								<ul class="submenu">
									<li><a href="maps-jqvmap.html">JQVMap</a></li>
									<li><a href="maps-mapael.html">Mapael</a></li>
								</ul>
							</div>
						</li>
						<li class="menu-group">Extras</li>
						<li class="panel">
							<a href="#subPages" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-files"></i> <span class="title">Pages</span> <i class="icon-submenu ti-angle-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="submenu">
									<li><a href="page-profile.html">Profile</a></li>
									<li><a href="page-login.html">Login</a></li>
									<li><a href="page-register.html">Register</a></li>
									<li><a href="page-lockscreen.html">Lockscreen</a></li>
									<li><a href="page-forgot-password.html">Forgot Password</a></li>
									<li><a href="page-404.html">Page 404</a></li>
									<li><a href="page-500.html">Page 500</a></li>
									<li><a href="page-blank.html">Blank Page</a></li>
								</ul>
							</div>
						</li>
						<li><a href="typography.html"><i class="ti-paragraph"></i> <span class="title">Typography</span></a></li>
						<li class="panel">
							<a href="#" data-toggle="collapse" data-target="#submenuDemo" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-menu"></i> <span class="title">Multilevel Menu</span><i class="icon-submenu ti-angle-left"></i></a>
							<div id="submenuDemo" class="collapse">
								<ul class="submenu">
									<li class="panel">
										<a href="#" data-toggle="collapse" data-target="#submenuDemoLv2" class="collapsed">Submenu 1 <i class="icon-submenu ti-angle-left"></i></a>
										<div id="submenuDemoLv2" class="collapse">
											<ul class="submenu">
												<li><a href="#">Another menu level</a></li>
												<li><a href="#" class="active">Another menu level</a></li>
												<li><a href="#">Another menu level</a></li>
											</ul>
										</div>
									</li>
									<li><a href="#">Submenu 2</a></li>
									<li><a href="#">Submenu 3</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
				</nav>
			</div>
			<div class="main">
			<!-- END LEFT SIDEBAR -->