<?php $this->load->view('inc/header');?>
<div class="section-fullscreen bg-image" style="background-image: url(<?= base_url("assets/images/app-landing-parallax-1-bg.jpg");?>)">
			<div class="bg-black-04">
				<div class="container text-center">
					<div class="position-middle">
						<div class="row">
							<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
								<h4 class="font-weight-light margin-bottom-30">Recover your Account</h4>
								<form>
									<input type="text" placeholder="Enter your email" name="name" required>
									<button class="button button-lg button-outline-white-2 button-fullwidth">Recover Account</button>
								</form>
								<div class="margin-top-30">
									<a href="Login.html">Go back to login</a>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end position-middle -->
				</div><!-- end container -->
			</div>
		</div>
        <?php $this->load->view('inc/footer');?>