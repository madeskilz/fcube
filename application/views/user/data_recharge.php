<?php $this->load->view('user/inc/sidebar');?>
	<div style="min-height:calc(100vh - 358px);">
        <div class="section">
			<div class="container">
				<div class="row col-spacing-50">
					<div class="col-12 col-md-6">
						<form>
							<label>Name</label>
							<input type="text" placeholder="Your name">
							<label class="required">Email address</label>
							<input type="email" placeholder="Enter your email" required>
							<label class="required">Message</label>
							<textarea name="message" placeholder="Message" required></textarea>
							<button type="submit" class="btn btn-lg btn-dark">Submit</button>
						</form>
					</div>

					<div class="col-12 col-md-6">

				<table class="table table-bordered js-table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>John</td>
      <td>Smith</td>
      <td>name@email.com</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Alexander</td>
      <td>Warren</td>
      <td>name@email.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Melissa</td>
      <td>Bakos</td>
      <td>name@email.com</td>
    </tr>
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>		
<?php $this->load->view('user/inc/footer');?>