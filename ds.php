<?php
session_start();

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.css'>

      <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <section>
	<header>
		<nav class="rad-navigation">
			<div class="rad-logo-container rad-nav-min">
				<a href="#" class="rad-logo"><i class=" fa fa-recycle"></i>Prototype</a>
				<a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
			</div>
			<a href="#" class="rad-logo-hidden">Prototype</a>
			<div class="rad-top-nav-container">
				<a href="" class="brand-icon"><i class="fa fa-recycle"></i></a>
				<ul class="pull-right links">
					<li class="rad-dropdown no-color">
						<a class="rad-menu-item" href="#"><img class="rad-list-img sm-img" src="https://lh4.googleusercontent.com/-GXmmnYTuWkg/AAAAAAAAAAI/AAAAAAAAAAA/oK6DEDS7grM/w56-h56/photo.jpg" alt="me" /></a>
						<ul class="rad-dropmenu-item sm-menu">
							<li class="rad-notification-item">
								<a class="rad-notification-content lg-text" href="#"><i class="fa fa-edit"></i> My Profile</a>
							</li>
							<li class="rad-notification-item">
								<a class="rad-notification-content lg-text" href="login/logout.php"><i class="fa fa-power-off"></i> Sign out</a>
							</li>
						</ul>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-cog"></i></a>
						<ul class="rad-dropmenu-item rad-settings">
							<li class="rad-dropmenu-header"><a href="#">Settings</a></li>
							<li class="rad-notification-item text-left">
								<div class="pull-left"><i class="fa fa-link"></i></div>
								<div class="pull-right">
									<label class="rad-chk-pin pull-right">
										<input type="checkbox" /><span></span></label>
								</div>
								<div class="rad-notification-body">
									<div class="lg-text">Change to Flat Theme</div>
									<div class="sm-text">Flattify it</div>
								</div>
							</li>
							<li id="rad-color-opts" class="rad-notification-item text-left hide">
								<div class="pull-left"><i class="fa fa-puzzle-piece"></i></div>
								<div class="pull-right">
									<div class="rad-color-swatch">
										<label class="colors rad-bg-crimson rad-option-selected">
											<input type="radio" checked name="color" value="crimson" />
										</label>
										<label class="colors rad-bg-teal">
											<input type="radio" name="color" value="teal" />
										</label>
										<label class="colors rad-bg-purple">
											<input type="radio" name="color" value="purple">
										</label>
										<label class="colors rad-bg-orange">
											<input type="radio" name="color" value="orange" />
										</label>
										<label class="colors rad-bg-twitter">
											<input type="radio" name="color" value="twitter" />
										</label>
									</div>
								</div>
								<div class="rad-notification-body">
									<div class="lg-text">Choose a color</div>
									<div class="sm-text">Make it colorful</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="pull-right links">
					<li>
						<a class="rad-menu-item" href="#"><i class="fa fa-comment-o"><span class="rad-menu-badge rad-bg-success">0</span></i></a>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-envelope-o"><span class="rad-menu-badge rad-bg-primary">23</span></i></a>
						<ul class="rad-dropmenu-item">
							<li class="rad-dropmenu-header"><a href="#">Your Notifications</a></li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-html5 fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Introduction to fetch()</div>
										<div class="sm-text">The fetch API</div>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-bitbucket fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Check your BitBucket</div>
										<div class="sm-text">Last Chance</div>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-google fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Google Account</div>
										<div class="sm-text">sathishlxg@gmail.com</div>
									</div>
								</a>
							</li>
							<li class="rad-dropmenu-footer"><a href="#">See all notifications</a></li>
						</ul>
					</li>
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge">49</span></i></a>
						<ul class="rad-dropmenu-item">
							<li class="rad-dropmenu-header"><a href="#">Your Alerts</a></li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-html5 fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Introduction to fetch()</div>
										<div class="sm-text">The fetch API</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 2 sec ago</em>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-bitbucket fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Check your BitBucket</div>
										<div class="sm-text">Last Chance</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 49 mins ago</em>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-google fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Google Account</div>
										<div class="sm-text">sathishlxg@gmail.com</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 2 days ago</em>
									</div>
								</a>
							</li>
							<li class="rad-dropmenu-footer"><a href="#">See all alerts</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
</section>
<aside>
	<nav class="rad-sidebar rad-nav-min">
		<ul>
			<li>
				<a href="#" class="inbox">
					<i class="fa fa-dashboard"><span class="icon-bg rad-bg-success"></span></i>
					<span class="rad-sidebar-item">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-bar-chart-o">
						<span class="icon-bg rad-bg-danger"></span>
					</i>
					<span class="rad-sidebar-item">Ticket status</span>
				</a>
			</li>
			<li><a href="#" class="snooz"><i class="fa fa-line-chart"><span class="icon-bg rad-bg-primary"></span></i><span class="rad-sidebar-item">Call trends</span></a></li>
			<li><a href="#" class="done"><i class="fa fa-area-chart"><span class="icon-bg rad-bg-warning"></span></i><span class="rad-sidebar-item">Heat maps</span></a></li>
			<li>
				<a href="#">
					<i class="fa fa-wrench"><span class="icon-bg rad-bg-violet"></span></i>
					<span class="rad-sidebar-item">Settings</span>
				</a>
			</li>
		</ul>
	</nav>
</aside>
<main>
	<section>
		<div class="rad-body-wrapper rad-nav-min">
			<div class="container-fluid">
				<header class="rad-page-title">
					<span>Dashboard</span>
					<small class="md-txt">Welcome <?PHP echo $_SESSION['username']; ?>, <a href="https://www.google.co.id/maps/place/National+Monument/@-6.1753924,106.8249641,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f5d2e764b12d:0x3d2ad6e1e0e9bcc8!8m2!3d-6.1753924!4d106.8271528" target="_blank"><i class="fa fa-map-marker rad-txt-danger"></i> Jakarta</a></small>					</header>
				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<div class="rad-info-box rad-txt-success">
							<i class="fa fa-bolt"></i>
							<span class="heading">Power</span>
							<span class="value"><span>4949</span></span>
						</div>
					</div>
					<div class="col-lg-4 col-xs-6">
						<div class="rad-info-box rad-txt-primary">
							<i class="fa fa-thermometer-half"></i>
							<span class="heading">Cooling</span>
							<span class="value"><span>2045</span></span>
						</div>
					</div>
					<div class="col-lg-4 col-xs-6">
						<div class="rad-info-box rad-txt-danger">
							<i class="fa fa-building-o"></i>
							<span class="heading">Space</span>
							<span class="value"><span>1300</span></span>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-4 col-xs-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Power Historical (Last 7 days)
								  						        <ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="lineChart" class="rad-chart"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-xs-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Cooling Historical (Last 7 days)
								  						        <ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="lineChart2" class="rad-chart"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-xs-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Space Historical (Last 7 days)
								  						        <ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="lineChart3" class="rad-chart"></div>
							</div>
						</div>
					</div>
				</div>


				<!--<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Power Historical<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="lineChart" class="rad-chart"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Cooling Historical<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="lineChart2" class="rad-chart"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Space Historical<ul class="rad-panel-action">
																	<li><i class="fa fa-chevron-down"></i></li>
																	<li><i class="fa fa-rotate-right"></i></li>
																	<li><i class="fa fa-cog"></i>
																	<li><i class="fa fa-close"></i>
																	</li>
																</ul></h3>
							</div>
							<div class="panel-body">
								<div id="lineChart3" class="rad-chart"></div>
							</div>
						</div>
					</div>
				</div>-->

			</div>
		</div>
	</section>
</main>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
<script src='http://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.3/jquery.slimscroll.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.8.0/lodash.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
<script src='http://jvectormap.com/js/jquery-jvectormap-2.0.3.min.js'></script>
<script src='http://jvectormap.com/js/jquery-jvectormap-world-mill-en.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
