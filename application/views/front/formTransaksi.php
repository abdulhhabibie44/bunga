<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fioregift</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/base/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
    <!-- font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			
		</div>
                   <div class="col-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <center><p style="font-size: 190%;" class="card-title">TRANSAKSI</p></center>
                                <p class="card-description">
                                    Form Tambah Transaksi
                                </p>
                                <form class="forms-sample" action="<?php echo base_url('Produk/tambahdata') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Nama Produk</label>
                                        <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Kategori Produk</label>
                                        <select name="kategori_produk" class="form-control">
                                            <option value="zero">--== Pilih Kategori ==--</option>
                                            <?php
                                            $kat = $this->db->query("SELECT * FROM tb_kategori_produk");
                                            foreach ($kat->result() as $row_kat) { ?>
                                                <option value="<?php echo $row_kat->id_kategori ?>"><?php echo $row_kat->nama_kategori; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Harga</label>
                                        <input type="text" class="form-control" name="harga" placeholder="Harga Produk" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Deskripsi</label>
                                        <textarea class="form-control" rows="4" name="deskripsi"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Gambar</label>
                                        <div class="input-group input-file" name="Fichier1">
                                            <input type="text" class="form-control" placeholder='Pilih Foto...' />
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary btn-choose" type="button">Cari</button>
                                            </span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                                    <button class="btn btn-light">Batal</button>
                                </form>
                            </div>
                        </div>
                    </div>
		<div class="col-lg-3">
			
		</div>
	</div>
</div>
</body>
</html>