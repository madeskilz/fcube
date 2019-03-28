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
		<script src="<?= base_url("assets/plugins/datatables/datatables.min.js");?>"></script>
		<script src="<?= base_url("assets/js/init.js");?>"></script>
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