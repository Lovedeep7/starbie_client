<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="<?php echo base_url();?>">Home</a>
						<i>|</i>
					</li>
					<li>Contact Us</li>
				</ul>
			</div>
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
<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>ontact
				<span>U</span>s
			</h3>
			<!-- //tittle heading -->
			<div class="row contact-grids agile-1 mb-5">
				<div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-map-marker-alt rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
						<p>Brisbane,
							<label>Australia.</label>
						</p>
					</div>
				</div>
				
				<div class="col-sm-4 contact-grid agileinfo-6">
					<div class="contact-grid1 text-center">
						<div class="con-ic">
							<i class="fas fa-envelope-open rounded-circle"></i>
						</div>
						<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
						<p>
							<a href="mailto:info@starbie.com">info1@starbie.com</a>
							<label>
	hp							<a href="mailto:info@starbie.com">info2@starbie.com/a>
							</label>
						</p>
					</div>
				</div>
			</div>
			<!-- form -->
			<form action="<?php echo base_url();?>Ecom/addContact" method="post">
				<div class="contact-grids1 w3agile-6">
					<div class="row">
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">Name</label>
							<input type="text" class="form-control" name="name" placeholder="" required="">
						</div>
						<div class="col-md-6 col-sm-6 contact-form1 form-group">
							<label class="col-form-label">E-mail</label>
							<input type="email" class="form-control" name="email" placeholder="" required="">
						</div>
					</div>
					<div class="contact-me animated wow slideInUp form-group">
						<label class="col-form-label">Message</label>
						<textarea name="message" class="form-control" placeholder="" required=""> </textarea>
					</div>
					<div class="contact-form">
						<input type="submit" value="Submit" style="background:#F45C5D;">
					</div>
				</div>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->
	<!-- map -->
	<div class="map mt-sm-0 mt-4">
		<iframe src="https://maps.google.com/maps?q=Brisbane%2C%20Australia&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
	</div>
	<!--/map-->
