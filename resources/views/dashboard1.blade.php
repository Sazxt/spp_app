
<!-- DEBUG-VIEW START 6 APPPATH\Views\App\index.php -->
<!-- DEBUG-VIEW START 5 APPPATH\Views\template\template.php -->
<!DOCTYPE html>
<html lang="en">
<!-- DEBUG-VIEW START 1 APPPATH\Views\template\components\head.php -->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Home | Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link href="/favicon.ico" rel="shortcut icon" type="image/png"/>

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<style type="text/css">
	.ook
	{
		color:#B4B4B4;
		display:inline;
		margin-left:9px;
		font-size:12px;
	}
	</style>
	<!-- debuging ! --->

	<!-- <script src="/assets/src/eruda.js"></script>
	<script src="/assets/src/eruda.min.js"></script>
	<script type="text/javascript">eruda.init();</script> -->

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/font.css">
	<link rel="stylesheet" href="/assets/fonts/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="/assets/style.css">
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.min.css">
	<link rel="stylesheet" href="/assets/css/select2.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">
	<!--   Core JS Files   -->
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- jQuery UI -->
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- Chart JS -->
	<script src="/assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="/assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="/assets/js/adminlte.min.js"></script>
	<script src="/assets/js/atlantis.min.js"></script>
	<script src="/assets/js/select2.min.js"></script>
	<script src="/assets/js/custom.js"></script>
	<script src="/assets/bootstrap-switch/js/bootstrap-switch.min.js"></script>
</head>
<!-- DEBUG-VIEW ENDED 1 APPPATH\Views\template\components\head.php -->

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- DEBUG-VIEW START 2 APPPATH\Views\template\components\logo_head.php -->
<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark">
				
				<a class="logo">
					<img src="/img/icon_web/logo.png" alt="navbar brand" class="navbar-brand logo-navbar">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
<!-- End Logo Header -->
<!-- DEBUG-VIEW ENDED 2 APPPATH\Views\template\components\logo_head.php -->
			<!-- DEBUG-VIEW START 3 APPPATH\Views\template\components\navbar.php -->
<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="../assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
 					   												<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 3 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
																						<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered user
													</span>
													<span class="time">2 months ago</span> 
												</div>
											</a>
																						<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered user
													</span>
													<span class="time">2 months ago</span> 
												</div>
											</a>
																						<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered user
													</span>
													<span class="time">2 months ago</span> 
												</div>
											</a>
																					</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
												<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="/img/1633405059_43ffe2a33be28df72c9d.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="/img/1633405059_43ffe2a33be28df72c9d.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>{{auth()->user()->name}}</h4>
												<p class="text-muted">saz</p><a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>My Profile</a>
										<a class="dropdown-item" href="#"><i class="fas fa-money-bill-wave fa-sm fa-fw mr-2 text-gray-400"></i>My Balance</a>
										<a class="dropdown-item" href="#"><i class="fas fa-inbox fa-sm fa-fw mr-2 text-gray-400"></i>Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
<!-- End Navbar -->
<!-- DEBUG-VIEW ENDED 3 APPPATH\Views\template\components\navbar.php -->
		</div>

		<!-- DEBUG-VIEW START 4 APPPATH\Views\template\components\sidebar.php -->
<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">		
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="/img/1633405059_43ffe2a33be28df72c9d.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
                                    {{auth()->user()->name}}
									<?php $level = auth()->user()->level; ?>
									<?php
										switch ($level) {
											case 1:
												$level = "Admin";
												break;
											
											default:
												$level = "Unknow";
												break;
										}
									?>
                                <span class="user-level">{{$level}}</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#">
											<span class="link-collapse"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"><p class="ook" style="margin-left:12px;">My Profile</p></span></i>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="link-collapse"><i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"><p class="ook">Edit Profile</p></span></i>
										</a>
									</li>
																		<li>
										<a href="#">
											<span class="link-collapse"><i class="fas fa-user-cog fa-sm fa-fw mr-2 text-gray-400"><p class="ook">Settings</p></span></i>
										</a>
									</li>
																	</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboardpanel" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboardpanel">
								<ul class="nav nav-collapse">
																		<li>
										<a href="#">
											<span class="sub-item">Account list</span>
										</a>
									</li>
																		<li>
										<a href="#">
											<span class="sub-item">Home</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Data</h4>
						</li>
												<li class="nav-item ">
							<a data-toggle="collapse" href="#base0">
								<i class="fas fa-users"></i>
									<p>Master Data Siswa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base0">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{ URL::to('/datasiswa') }}">
											<span class="sub-item">Siswa</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
<!-- End Sidebar -->
<!-- DEBUG-VIEW ENDED 4 APPPATH\Views\template\components\sidebar.php -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">dashboard</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">owner</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Home</a>
							</li>
						</ul>
					</div>
					
					 
 
<div class="row">
	<div class="col-sm-6 col-md-4">
		<div class="card card-stats card-primary card-round">
			<div class="card-body">
				<div class="row">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="flaticon-users"></i>
						</div>
					</div>
					<div class="col-7 col-stats">
						<div class="numbers">
							<p class="card-category">Account</p>
							<h4 class="card-title">16</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="card card-stats card-success card-round">
			<div class="card-body">
				<div class="row">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="flaticon-coins"></i>
						</div>
					</div>
					<div class="col-7 col-stats">
						<div class="numbers">
							<p class="card-category">Transaksi</p>
							<h4 class="card-title">6</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="card card-stats card-info card-round">
			<div class="card-body">
				<div class="row">
					<div class="col-5">
						<div class="icon-big text-center">
							<i class="flaticon-network"></i>
						</div>
					</div>
					<div class="col-7 col-stats">
						<div class="numbers">
							<p class="card-category">Team</p>
							<h4 class="card-title">2</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-header d-flex justify-content-between">
				<h3 class="card-title">Data transaksi</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove">
						<i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<div class="card-body">
				<div class="chart-container">
					<canvas id="barChart">

					</canvas>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.judul{
		font-family:varela;
		font-weight:600;
	}
	.step{
		font-family:mali;
	}
	.card-title{
		font-family:arial !important;
	}
	.card-tools {
		margin: .3rem .5rem;
	}
	.btn-tool {
 		background-color: transparent;
		color: #adb5bd;
		font-size: 0.875rem;
		margin: -0.75rem 0;
		padding: .25rem .5rem;
	}
</style>
<script type="text/javascript">
	var barChart = document.getElementById('barChart').getContext('2d')

	var myBarChart = new Chart(barChart, {
			type: 'bar',
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets : [{
					label: "transaksi",
					backgroundColor: '#16A99B',
					borderColor: 'rgb(23, 125, 255)',
					data: [0,0,0,0,0,0,0,0,0,0,5,1],
				}],
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				},
			}
		});
</script>
	
					
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright mx-auto">
						<span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by <b>Sazxt Ravel</b>
					</div>				
				</div>
			</footer>
		</div>
		
		<script>
	   window.setTimeout(function (){
				$(".hilang").fadeTo(500,0).slideUp(500, function (){
					$(this).remove();
					});
				},3000);
	  </script>
		<!-- End Custom template -->
	</div>
	
</body>
</html>
<!-- DEBUG-VIEW ENDED 5 APPPATH\Views\template\template.php -->

<!-- DEBUG-VIEW ENDED 6 APPPATH\Views\App\index.php -->
