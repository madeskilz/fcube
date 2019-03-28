<?php $this->load->view('admin/inc/sidebar');?>
	<div style="min-height:calc(100vh - 358px);">
    <div class="section" style="padding-left:10px;padding-right:10px;">
    <div class="row">
        <div class="col-12 col-md-12 table-responsive">
        <table class="table table-bordered js-table" width="100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Wallet</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>John Crown</td>
      <td>JohnCro</td>
      <td>name@email.com</td>
      <td>09088776655</td>
      <td>&#8358; 10,000</td>
      <td>
      <div class="btn-group">
          <button class="btn btn-info">Approve</button>
          <button class="btn btn-warning">Decline</button>
          <button class="btn btn-danger">Block</button>
      </div>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Hohn Crown</td>
      <td>JohnCro</td>
      <td>name@email.com</td>
      <td>09088776655</td>
      <td>&#8358; 10,000</td>
      <td>
      <div class="btn-group">
          <button class="btn btn-info">Approve</button>
          <button class="btn btn-warning">Decline</button>
          <button class="btn btn-danger">Block</button>
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