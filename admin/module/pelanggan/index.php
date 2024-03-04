<h4>Data pelanggan</h4>
        <br />
        <?php if(isset($_GET['success-stok'])){?>
        <div class="alert alert-success">
            <p>Tambah Stok Berhasil !</p>
        </div>
        <?php }?>
        <?php if(isset($_GET['success'])){?>
        <div class="alert alert-success">
            <p>Tambah Data Berhasil !</p>
        </div>
        <?php }?>
        <?php if(isset($_GET['remove'])){?>
        <div class="alert alert-danger">
            <p>Hapus Data Berhasil !</p>
        </div>
        <?php }?>

        <?php 
			$sql="select * from pelanggan";
			$row = $config -> prepare($sql);
			$row -> execute();
			$r = $row -> rowCount();
		?>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary btn-md mr-2" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-plus"></i> Insert Data</button>
        <div class="clearfix"></div>
        <br />
        <!-- view pelanggan -->
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm" id="example1">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th>ID pelanggan</th>
                            <th>Nama pelanggan</th>
                            <th>Alamat</th>
                            <th>Nomor Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
						$mysqli = mysqli_connect('localhost', 'root', '', 'db_toko');
                        $query = mysqli_query($mysqli,"select * from pelanggan");
                        $no = 1;
                        while ($isi = mysqli_fetch_assoc($query)) {
					?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $isi['id_pelanggan'];?></td>
                            <td><?php echo $isi['namapelanggan'];?></td>
                            <td><?php echo $isi['alamat'];?></td>
                            <td><?php echo $isi['nomortelepon'];?></td>
                            <td>
                                <!-- <a href="index.php?page=pelanggan/details&pelanggan=<?php echo $isi['id_pelanggan'];?>"><button
                                        class="btn btn-primary btn-xs">Details</button></a> -->
                                <a href="index.php?page=pelanggan/edit&pelanggan=<?php echo $isi['id_pelanggan'];?>"><button
                                        class="btn btn-warning btn-xs">Edit</button></a>
                                <a href="fungsi/hapus/hapus.php?pelanggan=hapus&id=<?php echo $isi['id_pelanggan'];?>"
                                    onclick="javascript:return confirm('Hapus Data pelanggan ?');"><button
                                        class="btn btn-danger btn-xs">Hapus</button></a>
                            </td>
                        </tr>
                        <?php 
        $no++; // Increment row number
    }
?>
                    </tbody>    
                </table>
            </div>
        </div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style=" border-radius:0px;">
                    <div class="modal-header" style="background:#285c64;color:#fff;">
                        <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah pelanggan</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="fungsi/tambah/tambah.php?pelanggan=tambah" method="POST">
                        <div class="modal-body">
                            <table class="table table-striped bordered">
                                <?php
									$format = $lihat -> pelanggan();
								?>  
                                <tr>
                                    <td>Nama pelanggan</td>
                                    <td><input type="text" placeholder="Nama pelanggan" class="form-control"
                                            name="namapelanggan"></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><input type="text" placeholder="Alamat" class="form-control"
                                            name="alamat"></td>
                                </tr>
                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td><input type="number" placeholder="Nomor Telepon"  class="form-control"
                                            name="nomortelepon"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert
                                Data</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>