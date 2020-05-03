<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard | JEPARADISE</title>
	<?php $this->load->view("admin/header.php") ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <?php $this->load->view("admin/sidebar.php") ; ?>
	
	<div class="content-wrapper">
		<div class="content-header">					
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">
		  <i class='fa fa-plus'></i>
		</button>
			<div class="container-fluid">
				<table class="table table-sm">
				  <thead>
					<tr>
					  <th>#</th>
					  <th >Username</th>
					  <th width='200px'>Level</th>
					  <th width='120px'> </th>
					</tr>
				  </thead>
				  <tbody>
				  <?php
				  $no = 1;
				  foreach($data_pengguna as $data){				  
				  ?>
					<tr>
					  <th scope="row"><?php echo $no++; ?></th>
					  <td><?php echo $data->username ?></td>
					  <td><?php echo $data->level ?></td>
					  <td>Edit</td>
					</tr>
				  <?php } ?>				  
				  </tbody>
				</table>
			</div>
		</div>
	</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method='post' action='<?php echo base_url() .'buku/tambahbuku'; ?>'>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Level</label>
				<select name='Level' class="form-control form-control-lg">
				  <option value="0">-Pilih Level-</option>
				  <option value="admin">Admin</option>
				  <option value="kasir">Kasir</option>
				</select>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" class="form-control">
			</div>
			<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
			<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
		</form>
      </div>
    </div>
  </div>
</div>

  <?php $this->load->view("admin/footer.php") ?>
</body>
</html>