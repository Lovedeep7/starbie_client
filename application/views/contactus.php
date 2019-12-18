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
			
			<h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
						<p>Brisbane,
							<label>Australia.</label>
						</p>
					</div>
				</div>
				
