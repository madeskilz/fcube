<?php $this->load->view('admin/inc/sidebar');?>
	<div style="min-height:calc(100vh - 358px);">
    <div class="section" style="padding-left:10px;padding-right:10px;">
    <div class="row">
        <div class="col-12 col-md-6">
            <ul class="nav tabs margin-bottom-20 text-center" style="color:#fff;">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#fund_wallet">Fund Wallet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#fund_transfer">Fund Transfer</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="fund_wallet">
                <div class="alert-secondary" style="padding:10px;font-size:12px;">
                                <h4 class="h5">Please Note:</h4>
                                <ul>
                                    <li>
                                        A transaction ID will be generated for you, which should be used as reference.
                                    </li>
                                    <li>
                                        If you will be paying via Bank Transfer / Deposit, account details will be shown.
                                    </li>
                                </ul>
                            </div>
                    <div class="">
						<form>
							<label class="required">Amount</label>
							<input type="text" placeholder="Enter Amount to Fund" required>
							<label class="required">Payment Method</label>
                            <select class="custom-select w-100 custom-select-lg">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
							<button type="submit" class="btn btn-lg btn-dark" style="margin-top:10px;">Fund Wallet</button>
						</form>
					</div>
                </div>
                <div class="tab-pane fade" id="fund_transfer">
                    <div class="">
						<form>
							<label class="required">Amount</label>
							<input type="text" placeholder="Enter Amount" required>
							<label class="required">Reciever Phone Number</label>
							<input type="text" placeholder="Enter Reciever Number" required>
							<button type="submit" class="btn btn-lg btn-dark">Transfer Fund</button>
						</form>
					</div>
                </div>
            </div>
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
<?php $this->load->view('admin/inc/footer');?>