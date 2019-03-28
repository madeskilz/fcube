<?php $this->load->view('admin/inc/sidebar');?>
	<div style="min-height:100vh;">
    <div class="section" style="padding-left:10px;padding-right:10px;">
    <div class="row">
        <div class="col-12 col-md-12 table-responsive">
        <table class="table table-bordered js-table" width="100%">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">Phone/Email</th>
              <th scope="col">Date</th>
              <th scope="col">Amount</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>John</td>
              <td>name@email.com</td>
              <td>12/12/12</td>
              <td>&#8358; 10,000</td>
              <td>
              <div class="btn-group">
                                            <button class="btn btn-info">Approve</button>
                                            <button class="btn btn-danger">Decline</button>
                                        </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
    </div>
    </div>
    </div>		
<?php $this->load->view('admin/inc/footer');?>