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
				<form method='post' action='<?php echo base_url() .'buku/edit'; ?>'>
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

  <?php $this->load->view("admin/footer.php") ?>
</body>
</html>