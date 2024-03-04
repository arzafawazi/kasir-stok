
<?php 
	$id_pelanggan = $_GET['pelanggan'];
	$hasil = $lihat -> pelanggan_edit($id_pelanggan);
?>
 <a href="index.php?page=pelanggan" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
 <h4>Edit pelanggan</h4>
 <?php if(isset($_GET['success'])){?>
 <div class="alert alert-success">
     <p>Edit Data Berhasil !</p>
 </div>
 <?php }?>
 <?php if(isset($_GET['remove'])){?>
 <div class="alert alert-danger">
     <p>Hapus Data Berhasil !</p>
 </div>
 <?php }?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<form action="fungsi/edit/edit.php?pelanggan=edit" method="POST">
				<tr>
					<td>ID pelanggan</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['id_pelanggan'];?>"
							name="id_pelanggan"></td>
				</tr>
				<tr>
					<td>Nama Pelanggan</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['namapelanggan'];?>" name="namapelanggan"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" class="form-control" name="alamat" value="<?php echo $hasil['alamat'];?>"></td>
				</tr>
				<tr>
					<td>Nomor Telepon</td>
					<td><input type="text" class="form-control" name="nomortelepon" value="<?php echo $hasil['nomortelepon'];?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
				</tr>
			</form>
		</table>
	</div>
</div>