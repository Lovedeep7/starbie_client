							
							
							<footer>
		<div class="footer-top-first">
		<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->
			
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Payment Method</h5>
					<ul>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay2.png" alt="">
						</li>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay5.png" alt="">
						</li>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay1.png" alt="">
						</li>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay4.png" alt="">
						</li>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay6.png" alt="">
						</li>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay3.png" alt="">
						</li>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay7.png" alt="">
						</li>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay8.png" alt="">
						</li>
						<li>
							<img src="<?php echo base_url();?>ci_assets/images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li class="mb-3">
								<a href="#">Mobiles </a>
							</li>
							<li class="mb-3">
								<a href="#">Computers</a>
							</li>
							<li class="mb-3">
								<a href="#">TV, Audio</a>
							</li>
							<li class="mb-3">
								<a href="#">Smartphones</a>
							</li>
							<li class="mb-3">
								<a href="#">Washing Machines</a>
							</li>
							<li>
								<a href="#">Refrigerators</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="#">About Us</a>
							</li>
							<li class="mb-3">
								<a href="#">Contact Us</a>
							</li>
							<li class="mb-3">
								<a href="#">Help</a>
							</li>
							<li class="mb-3">
								<a href="#">Faqs</a>
							</li>
							<li class="mb-3">
								<a href="#">Terms of use</a>
							</li>
							<li>
								<a href="#">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> Brisbane, Australia.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 333 222 3333 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +222 11 4444 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail info1@starbie.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail info2@starbie.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
					
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>

				
		</div>
		

	</footer>

	<footer>
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">Starbie
				<a href="#"> An Ecommerce Website</a>
			</p>
			
		</div>
	</div>

	<script src="<?php echo base_url();?>ci_assets/js/jquery-2.2.3.min.js"></script>
	<script src="<?php echo base_url();?>ci_assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>ci_assets/js/creditly.js"></script>
	<script src="<?php echo base_url();?>ci_assets/js/creditly2.js"></script>
	

	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="<?php echo base_url();?>ci_assets/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="<?php echo base_url();?>ci_assets/js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="<?php echo base_url();?>ci_assets/js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="<?php echo base_url();?>ci_assets/js/move-top.js"></script>
	<script src="<?php echo base_url();?>ci_assets/js/easing.js"></script>
	<script src="<?php echo base_url();?>ci_assets/js/easyResponsiveTabs.js"></script>
	<script src="<?php echo base_url();?>ci_assets/js/imagezoom.js"></script>
	<script src="<?php echo base_url();?>ci_assets/js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
</body>
</html>
