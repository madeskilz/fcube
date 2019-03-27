
			<footer>
				<div class="footer bg-dark-lighter">
					<div class="container text-center">
						<h3>F-Cube Digitals</h3>
						<ul class="list-horizontal-unstyled icon-lg margin-top-20">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div><!-- end container -->
				</div><!-- end footer -->
				<div class="footer-bottom bg-dark">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-6 text-center text-md-left">
								<p>&copy; <?= date("Y");?> F-Cube Digitals, All Rights Reserved.</p>
							</div>
							<div class="col-12 col-md-6 text-center text-md-right">
								<ul class="list-horizontal-unstyled">
									<li><a href="#">Policy</a></li>
									<li><a href="#">Terms &amp; Conditions</a></li>
								</ul>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div><!-- end footer-bottom -->
			</footer>
		</div>

		<!-- ***** JAVASCRIPTS ***** -->
		<!-- Libraries -->
		<script src="<?= base_url("assets/plugins/jquery.min.js");?>"></script>
		<script src="<?= base_url("assets/plugins/bootstrap/popper.min.js");?>"></script>
		<!-- Plugins -->
		<script src="<?= base_url("assets/plugins/bootstrap/bootstrap.min.js");?>"></script>
		<script src="<?= base_url("assets/plugins/appear.min.js");?>"></script>
		<script src="<?= base_url("assets/plugins/easing.min.js");?>"></script>
		<script src="<?= base_url("assets/plugins/retina.min.js");?>"></script>
		<script src="<?= base_url("assets/plugins/countdown.min.js");?>"></script>
		<script src="<?= base_url("assets/plugins/imagesloaded.pkgd.min.js");?>"></script>
		<script src="<?= base_url("assets/plugins/isotope.pkgd.min.html");?>"></script>
		<script src="<?= base_url("assets/plugins/jarallax/jarallax.min.html");?>"></script>
		<script src="<?= base_url("assets/plugins/jarallax/jarallax-video.min.html");?>"></script>
		<script src="<?= base_url("assets/plugins/magnific-popup/magnific-popup.min.html");?>"></script>
		<script src="<?= base_url("assets/plugins/owl-carousel/owl.carousel.min.js");?>"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="<?= base_url("assets/plugins/gmaps.min.html");?>"></script>
		<!-- Scripts -->
		<script src="<?= base_url("assets/js/functions.min.html");?>"></script>
		<script>
			$('#user-icon').on('click', function(){
				let d = $('.dropdown-custom').css("display");
				if(d == "none"){
					$('.dropdown-custom').css("display","block");
				}else{
					$('.dropdown-custom').css("display","none");
				}
			});
		</script>
	</body>

</html>