<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Starbie</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<link href="<?php echo base_url();?>ci_assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="<?php echo base_url();?>ci_assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="<?php echo base_url();?>ci_assets/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="<?php echo base_url();?>ci_assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="<?php echo base_url();?>ci_assets/css/menu.css" rel="stylesheet" type="text/css" media="all" />

	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	
</head>
<body>
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Get Starbie's top deals
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>
						
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> Contact Number
						</li>
						<?php if($this->session->userdata('user_firstname')) { ?>
						<li class="text-center border-right text-white">
							<a href="<?php echo base_url();?>Ecom/logout" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Logout </a>
						</li>
						<?php } else { ?>
							<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
						</li>
						<?php } ?>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
						</li>
					</ul>
			
				</div>
			</div>
		</div>
	</div>

	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Please Select Your Location</h3>
			
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url();?>Ecom/LoginUser" method="post">
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="user_email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="user_password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url();?>Ecom/addUser" method="post" enctype='multipart/form-data'>
						<div class="form-group">
							<label class="col-form-label">profile picture</label>
							<input type="file" class="form-control" placeholder=" " name="file" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">First Name</label>
							<input type="text" class="form-control" placeholder=" " name="first_name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Middle Name</label>
							<input type="text" class="form-control" placeholder=" " name="middle_name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Last Name</label>
							<input type="text" class="form-control" placeholder=" " name="last_name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Gender</label>
							<select class="form-control" name="gender">
								<option value="MALE">MALE</option>
								<option value="MALE">FEMALE</option>
							</select>
					
						</div>
							
						<div class="form-group">
							<label class="col-form-label">Address</label>
							<input type="text" class="form-control" placeholder=" " name="address" id="password1" required="">
						</div>
							<div class="form-group">
							<label class="col-form-label">Date of Birth</label>
							<input type="date" class="form-control" placeholder=" " name="dateof_birth" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" id="password1" required="">
						</div>	<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="password" id="password1" required="">
						</div>	<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="confirm_Password" id="password1" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="<?php echo base_url();?>" class="font-weight-bold font-italic">
							<img src="<?php echo base_url();?>" alt=" " class="img-fluid">Starbie
						</a>
					</h1>
				</div>
				
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">All Categories</option>
							<option value="catagory 1">catagory 1</option>
							<option value="catagory 2">catagory 2</option>
							<option value="catagory 3">catagory 3</option>
							<option value="catagory 3">catagory 4</option>
							<option value="catagory 3">catagory 5</option>
							<option value="catagory 3">catagory 6</option>
							<option value="catagory 3">catagory 7</option>
							<option value="catagory 3">catagory 8</option>
							<option value="catagory 3">catagory 9</option>
						</select> 
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo base_url();?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Browse Products
							</a>
							<div class="dropdown-menu" >
								<div class="agile_inner_drop_nav_info p-4" style="min-width: 520px;">
									<h5 class="mb-3">Catagory List</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="<?php echo base_url();?>Ecom/products">Mobiles & Computers</a>
												</li>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="<?php echo base_url();?>Ecom/aboutus">About Us</a>
						</li>
					
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							
							<div class="dropdown-menu">
								<a class="dropdown-item" href="<?php echo base_url();?>ci_assets/product.html">Product 1</a>
								<a class="dropdown-item" href="<?php echo base_url();?>ci_assets/product2.html">Product 2</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url();?>ci_assets/single.html">Single Product 1</a>
								<a class="dropdown-item" href="<?php echo base_url();?>ci_assets/single2.html">Single Product 2</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url();?>ci_assets/checkout.html">Checkout Page</a>
								<a class="dropdown-item" href="<?php echo base_url();?>ci_assets/payment.html">Payment Page</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url();?>Ecom/contactUs">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<?php if($this->session->flashdata('success')) { ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong><?php echo $this->session->userdata('user_firstname'); ?></strong> <?php echo $this->session->flashdata('success');?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>
<?php } else if($this->session->flashdata('failed')) { ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Failed</strong> <?php echo $this->session->flashdata('failed');?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		</div>
<?php } ?>
	<!-- //navigation -->

	
