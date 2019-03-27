<?php $this->load->view('admin/inc/sidebar');?>
	<div style="min-height:calc(100vh - 358px);">
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
							<label class="required">Select Plan</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
							<label class="required">Phone Number</label>
							<input type="text" placeholder="Phone Number(s) seperated by a comma(,)" required>
							<button type="submit" class="btn btn-lg btn-dark">Buy Data</button>
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
<?php $this->load->view('admin/inc/footer');?>