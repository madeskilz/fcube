<?php $this->load->view('inc/header');?>
<!-- Contact Info section -->
<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-3 icon-3xl">
						<i class="ti ti-email text-dark margin-bottom-20"></i>
						<h6 class="heading-uppercase no-margin">Email</h6>
						<p>contact@email.com</p>
					</div>
					<div class="col-12 col-sm-6 col-md-3 icon-3xl">
						<i class="ti ti-mobile text-dark margin-bottom-20"></i>
						<h6 class="heading-uppercase no-margin">Phone</h6>
						<p>+(987) 654 321 01</p>
					</div>
					<div class="col-12 col-sm-6 col-md-3 icon-3xl">
						<i class="ti ti-skype text-dark margin-bottom-20"></i>
						<h6 class="heading-uppercase no-margin">Skype</h6>
						<p>contact.skype</p>
					</div>
					<div class="col-12 col-sm-6 col-md-3 icon-3xl">
						<i class="ti ti-location-pin text-dark margin-bottom-20"></i>
						<h6 class="heading-uppercase no-margin">Address</h6>
						<p>121 King St, Melbourne VIC 3000</p>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</div>
		<!-- end Contact Info section -->

		<!-- Contact Form section -->
		<div class="section no-padding-top">
			<div class="container">
				<div class="contact-form">
					<form method="post" id="contactform">
						<div class="form-row">
							<div class="col-12 col-sm-6">
								<input type="text" id="name" name="name" placeholder="Name" required>
							</div>
							<div class="col-12 col-sm-6">
								<input type="email" id="email" name="email" placeholder="E-Mail" required>
							</div>
						</div>
						<input type="text" id="subject" name="subject" placeholder="Subject" required>
						<textarea name="message" id="message" placeholder="Message"></textarea>
						<button class="button button-lg button-outline-dark-2" type="submit">Send Message</button>
					</form>
					<!-- Submit result -->
					<div class="submit-result">
						<span id="success">Thank you! Your Message has been sent.</span>
						<span id="error">Something went wrong, Please try again!</span>
					</div>
				</div><!-- end contact-form -->
			</div><!-- end container -->
		</div>
		<!-- end Contact Form section -->
		<?php $this->load->view('inc/footer');?>