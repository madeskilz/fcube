<?php $this->load->view('admin/inc/sidebar');?>
	<div style="min-height:100vh;">
        <div class="section">
			<div class="container">
				<div class="row col-spacing-50">
        <div class="col-12 col-md-2"></div>
					<div class="col-12 col-md-8">
          <h4 class="h5 text-center">Create Service</h4>
						<form>
            <div class="row">
              <div class="col-md-6">
                <label class="required">Select Category</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
              </div>
              <div class="col-md-6">
                <label class="required">Service Title</label>
                <input type="text" placeholder="Enter Service Name" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label class="required">Select Service Discount</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
              </div>
              <div class="col-md-6">
              <label class="required">Discount For</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label class="required">Select Service Network</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
              </div>
              <div class="col-md-6">
              <label class="required">Select Service Availability</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
              </div>
            </div>
            <label class="required">Enter Service Details</label>
							<textarea name="message" placeholder="Give a detailed information about this service, if available" required></textarea>

              <label class="required">Enter Service SEO Keywords</label>
							<textarea name="message" placeholder="The keywords you'll like the user to search for in getting this item" required></textarea>
							
							<button type="submit" class="btn btn-lg btn-dark">Create Service</button>
						</form>
					</div>
</div><div style="margin-top:20px;">
<h4 class="h4 text-center">All Services</h4>
<hr style="border:1px solid grey;"/>
					<div class="col-12 col-md-12 table-responsive" style="margin-top:10px;">
          <table class="table table-bordered js-table" width="100%">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Service Name</th>
              <th scope="col">Category</th>
              <th scope="col">Discount</th>
              <th scope="col">Availability</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Airtime Data</td>
              <td>Data</td>
              <td>4% / All Buyers</td>
              <td>Available</td>
              <td>
              <div class="btn-group">
                                            <button class="btn btn-info">View</button>
                                            <button class="btn btn-danger">Delete</button>
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