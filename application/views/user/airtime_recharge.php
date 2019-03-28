<?php $this->load->view('user/inc/sidebar');?>
	<div style="min-height:100vh;">
        <div class="section">
			<div class="container">
				<div class="row col-spacing-50">
					<div class="col-12 col-md-6">
						<form>
							<label class="required">Select Network</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
							<label class="required">Enter Amount</label>
							<input type="text" placeholder="Enter Amount" required>
							<label class="required">Phone Number</label>
							<input type="text" placeholder="Phone Number(s) seperated by a comma(,)" required>
							<button type="submit" class="btn btn-lg btn-dark">Buy Airtime</button>
						</form>
					</div>

					<div class="col-12 col-md-6 table-responsive">
          <table class="table table-bordered js-table" width="100%">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Phone/Email</th>
              <th scope="col">Date</th>
              <th scope="col">Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>John</td>
              <td>name@email.com</td>
              <td>12/12/12</td>
              <td>&#8358; 10,000</td>
            </tr>
          </tbody>
        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>		
<?php $this->load->view('user/inc/footer');?>