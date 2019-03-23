<?php $this->load->view('inc/header');?>
<div class="section-fullscreen bg-image" style="background-image: url(<?= base_url("assets/images/app-landing-parallax-2-bg.jpg");?>)">
			<div class="bg-black-04">
				<div class="container text-center">
					<div class="position-middle">
						<div class="row">
							<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
								<h4 class="font-weight-light margin-bottom-30">Registration</h4>
								<form>
									<input type="text" placeholder="Username" name="name" required>
									<input type="text" placeholder="Email" name="email" required>
									<input type="password" placeholder="Password" name="pw" required>
									<input type="password" placeholder="Confirm Password" name="pw2" required>
									<button class="button button-lg button-outline-white-2 button-fullwidth">Register</button>
								</form>
								<div class="margin-top-30">
									<p>By signing up, you agree to our <a href="#">Terms of Use</a></p>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end position-middle -->
				</div><!-- end container -->
			</div>
		</div>
        <?php $this->load->view('inc/footer');?>