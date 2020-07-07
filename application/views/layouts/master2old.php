<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2019 00:52:43 GMT -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>ShugaPlanet- <?php echo $title; ?></title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?php echo base_url();?>assets2/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets2/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets2/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?php echo base_url();?>assets2/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets2/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets2/css/material_style.css">
	<!-- inbox style -->
	<link href="<?php echo base_url();?>assets2/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="<?php echo base_url();?>assets2/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?php echo base_url();?>assets2/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets2/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets2/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets2/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url();?>assets2/css/pages/formlayout.css" rel="stylesheet" type="text/css" />

	<!-- data tables -->
    <link href="<?php echo base_url();?>assets2/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

	<style>
		.lds-spinner {
			color: official;
			display: inline-block;
			position: relative;
			width: 80px;
			height: 80px;
			}
			.lds-spinner div {
			transform-origin: 40px 40px;
			animation: lds-spinner 1.2s linear infinite;
			}
			.lds-spinner div:after {
			content: " ";
			display: block;
			position: absolute;
			top: 3px;
			left: 37px;
			width: 6px;
			height: 18px;
			border-radius: 20%;
			background: #fff;
			}
			.lds-spinner div:nth-child(1) {
			transform: rotate(0deg);
			animation-delay: -1.1s;
			}
			.lds-spinner div:nth-child(2) {
			transform: rotate(30deg);
			animation-delay: -1s;
			}
			.lds-spinner div:nth-child(3) {
			transform: rotate(60deg);
			animation-delay: -0.9s;
			}
			.lds-spinner div:nth-child(4) {
			transform: rotate(90deg);
			animation-delay: -0.8s;
			}
			.lds-spinner div:nth-child(5) {
			transform: rotate(120deg);
			animation-delay: -0.7s;
			}
			.lds-spinner div:nth-child(6) {
			transform: rotate(150deg);
			animation-delay: -0.6s;
			}
			.lds-spinner div:nth-child(7) {
			transform: rotate(180deg);
			animation-delay: -0.5s;
			}
			.lds-spinner div:nth-child(8) {
			transform: rotate(210deg);
			animation-delay: -0.4s;
			}
			.lds-spinner div:nth-child(9) {
			transform: rotate(240deg);
			animation-delay: -0.3s;
			}
			.lds-spinner div:nth-child(10) {
			transform: rotate(270deg);
			animation-delay: -0.2s;
			}
			.lds-spinner div:nth-child(11) {
			transform: rotate(300deg);
			animation-delay: -0.1s;
			}
			.lds-spinner div:nth-child(12) {
			transform: rotate(330deg);
			animation-delay: 0s;
			}
			@keyframes lds-spinner {
			0% {
				opacity: 1;
			}
			100% {
				opacity: 0;
			}
			}

	</style>
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo" style="'background:red !important;">
					<a href="/">
						<span class="logo-default">Shuga Planet</span> </a>
				</div>
				<!-- logo end -->
				
				
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa user"></i>
								<span class="username username-hide-on-mobile"> <?php echo $user->user_name;?> </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="<?php echo site_url();?>user/logout">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
									   <i class="fa fa-user-circle-o" style="font-size:35px;"></i>
									</div>
									<div class="pull-left info">
										<p> <?php echo $user->user_name;?></p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start active open">
								<a href="<?php echo site_url();?>user/dashboard" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
								</a>
							
							</li>
							<li class="nav-item">
								<a href="<?php echo site_url();?>request/vip" class="nav-link"> <i class="material-icons" style="font-size:22px;">stars</i>
									<span class="title">VIP Hookups</span> 
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link"> <i class="material-icons"style="font-size:22px;">local_bar</i>
									<span class="title">Flings</span> <span class="arrow"></span>
								</a>
								<ul class="">
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/flingmw" class="nav-link "> <span class="title">Men Seeking Women</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/flingwm" class="nav-link "> <span class="title">Women Seeking Men</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/flingmm" class="nav-link "> <span class="title">Men Seeking Men</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/flingww" class="nav-link "> <span class="title">Women Seeking Women</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/flingcm" class="nav-link "> <span class="title">Couples Seeking Men</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/flingcw" class="nav-link "> <span class="title">Couples Seeking Women</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/flingf" class="nav-link "> <span class="title">Fetishes/Groupies</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link"> <i class="material-icons" style="font-size:22px;">receipt</i>
									<span class="title">Relationships</span> <span class="arrow"></span>
								</a>
								<ul class="">
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/ltmw" class="nav-link "> <span class="title">Men Seeking Women</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/ltwm" class="nav-link "> <span class="title">Women Seeking Men</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/ltmm" class="nav-link "> <span class="title">Men Seeking Men</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo site_url();?>request/ltww" class="nav-link "> <span class="title">Women Seeking Women</span>
										</a>
									</li>
									
								</ul>
							</li>
							
							<li class="nav-item">
							    <a href="#quick_sidebar_tab_1" class="nav-link"></a>
						    </li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->

	
              <!-- DYNAMIC CONTENT -->

                <?php $this->load->view($content); ?> 

              <!-- END OF DYNAMIC CONTENT -->

		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2019 &copy; ShugaPlanet
				
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="<?php echo base_url();?>assets2/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets2/plugins/popper/popper.js"></script>
	<script src="<?php echo base_url();?>assets2/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?php echo base_url();?>assets2/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url();?>assets2/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets2/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="<?php echo base_url();?>assets2/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url();?>assets2/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="<?php echo base_url();?>assets2/js/app.js"></script>
	<script src="<?php echo base_url();?>assets2/js/layout.js"></script>
	<script src="<?php echo base_url();?>assets2/js/theme-color.js"></script>
	<!-- material -->
	<script src="<?php echo base_url();?>assets2/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="<?php echo base_url();?>assets2/plugins/chart-js/Chart.bundle.js"></script>
	<script src="<?php echo base_url();?>assets2/plugins/chart-js/utils.js"></script>
	

	<!-- end js include path -->

	 <!-- data tables -->
	 <script src="<?php echo base_url();?>assets2/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets2/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo base_url();?>assets2/js/countries.js"></script>


	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



	<script>

    $(document).ready(function(){
		
	
			document.getElementById("Formbtn").addEventListener("submit", function(event){
			
			event.preventDefault()

			var querystring = $(this).serialize();
			

			$.ajax({
			    url: '<?php echo base_url(); ?>/request/insert',
			    type: "POST",
			    data: querystring,
			    success: function(data) {
			        //code to execute
					//alert(data);
					$('#request-result').html('Request Successfully Sent').delay(4000).fadeOut();
					},
				error: function(data) {
			        //code to execute
					//alert(data);
					$('#request-result').html('Error occurred! Try again').delay(4000).fadeOut();
					},
			    });
				return false;
			});


			var $loading = $('#loadingDiv').hide();
			$(document)
			.ajaxStart(function () {
				$loading.show();
			})
			.ajaxStop(function () {
				$loading.hide();
			});


			$('.datatable').DataTable({
				"order": [[ 0, "desc" ]]
			});


			populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
			populateCountries2("country2", "state2"); // first parameter is id of country drop-down and second parameter is id of state drop-down
            populateCountries3("country3", "state3"); // first parameter is id of country drop-down and second parameter is id of state drop-down


			$('.datepicker').datepicker({
				dateFormat: "dd-mm-yy",
               changeYear: true,
                changeMonth: true,
			});


    $('[data-toggle="tooltip"]').tooltip();


		});
	</script>
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2019 00:55:10 GMT -->
</html>