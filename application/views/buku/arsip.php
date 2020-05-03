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
					  <th >Judul</th>
					  <th width='200px'>Rak</th>
					  <th width='30px'>Stok</th>
					  <th width='120px'>Harga Beli</th>
					  <th width='120px'>Harga Jual</th>
					  <th width='20px'></th>
					  <th width='20px'></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php
				  $no = 1;
				  foreach($data_buku as $buku){				  
				  ?>
					<tr>
					  <th scope="row"><?php echo $no++; ?></th>
					  <td><?php echo $buku->judul ?></td>
					  <td><?php echo $buku->nama_rak ?></td>
					  <td><?php echo $buku->stok ?></td>
					  <td><?php echo $buku->harga_beli ?></td>
					  <td><?php echo $buku->harga_jual ?></td>
					  <td onclick="javascript: return confirm('Anda Yakin Ingin Menghapus Buku <?php echo $buku->judul ?>')"><?php echo anchor('buku/hapus/'.$buku->kode_buku, "<div class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></div>") ?></td>
					  <td><?php echo anchor('buku/edit/'.$buku->kode_buku, "<div class='btn btn-primary btn-sm'><i class='fas fa-edit'></i></div>") ?></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method='post' action='<?php echo base_url() .'buku/tambahbuku'; ?>'>
			<div class="form-group">
				<label for="kode_buku">Kode Buku</label>
				<input type="text" name="kode_buku" class="form-control" id="kode_buku">
			</div>
			<div class="form-group">
				<label for="judul">Judul</label>
				<input type="text" name="judul" class="form-control" id="judul">
			</div>
			<div class="form-group">
				<label for="harga_beli">Harga Beli</label>
				<input type="text" name="harga_beli" class="form-control" id="harga_beli">
			</div>
			<div class="form-group">
				<label for="harga_jual">Harga Jual</label>
				<input type="text" name="harga_jual" class="form-control" id="harga_jual">
			</div>
			<div class="form-group">
				<label for="rak">Rak</label>
				<select name='rak' class="form-control form-control-lg" id="rak">
				  <option value="0">-Pilih Rak-</option>
				  <?php foreach($data_rak as $rak){ ?>
				  <option value="<?php echo $rak->id_rak ;?>"><?php echo $rak->nama_rak ;?></option>
				  <?php } ?>
				</select>
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