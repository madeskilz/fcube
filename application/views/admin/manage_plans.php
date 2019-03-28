<?php $this->load->view('admin/inc/sidebar');?>
	<div style="min-height:100vh;">
        <div class="section">
			<div class="container">
				<div class="row col-spacing-50">
        <div class="col-12 col-md-3"></div>
					<div class="col-12 col-md-6">
          <h4 class="h5 text-center">Create Plan</h4>
						<form>
							<label class="required">Select Service</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
							<label class="required">Plan Amount (&#8358;)</label>
							<input type="text" placeholder="E.g 1.8GiB - 1000" required>
							<button type="submit" class="btn btn-lg btn-dark">Create Plan</button>
						</form>
					</div>
</div><div style="margin-top:20px;">
<h4 class="h4 text-center">All Plans</h4>
<hr style="border:1px solid grey;"/>
					<div class="col-12 col-md-12 table-responsive" style="margin-top:10px;">
          <table class="table table-bordered js-table" width="100%">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Service Name</th>
              <th scope="col">Plans Range From</th>
              <th scope="col">Price Range From</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Aitime</td>
              <td>1.8GiB</td>
              <td>&#8358; 1,000</td>
              <td>
              <div class="btn-group">
                                            <button class="btn btn-info">View All</button>
                                        </div>
              </td>
            </tr>
          </tbody>
        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>		
<?php $this->load->view('admin/inc/footer');?>