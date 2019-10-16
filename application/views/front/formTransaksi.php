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
		<div class="col-lg-4">
			<img class="logo_front" src="<?php echo base_url('assets/images/logo.svg') ?>" alt="logo" />
		</div>	
		<div class="col-lg-8">
			<ul>
				<li><a class="link_sub" href="<?php echo base_url('Home');?>">BERANDA</a></li>
				<li><a class="link_sub" href="<?php echo base_url('Produk_user');?>">PRODUK</a></li>						
				<li><a class="link_sub" href="<?php echo base_url('Login');?>">LOGIN</a></li>						
			</ul>
		</div>	
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-lg-3">
			
		</div>
                   <div class="col-6 grid-margin stretch-card">
                        <div class="card" style="margin-top: 10%;">
                            <div class="card-body">
                                <center><p style="font-size: 190%;" class="card-title">TRANSAKSI</p></center>
                                <p class="card-description">
                                    Form Tambah Transaksi
                                </p>
                                <?php
							        // $id_data=$this->session->userdata('produk');
                                 ?>
                                <form class="forms-sample" action="<?php echo base_url('Transaksi/transaksi/'.$idProduk) ?>" method="post" enctype="multipart/form-data">
                                	<?php
                                		$queryKat = $this->db->query("SELECT * FROM tb_produk");
                                                    $idKat = $idProduk;
                                                    foreach ($queryKat->result() as $keyQuery) {
                                                        if ($keyQuery->id_produk == $idKat) {
                                                            $kat = $keyQuery->nama_produk;
                                                        }
                                                    }
                                	?>

                                    <div class="form-group">
                                        <label for="namaProduk">Nama Produk</label>
                                        <input type="hidden" value="<?php echo $idProduk; ?>" class="form-control" name="id_produk" placeholder="Nama Produk" autocomplete="off">
                                        <input type="text" disabled="disabled" value="<?php echo $kat; ?>" class="form-control" name="nama_produk" placeholder="Nama Produk" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah</label>
                                        <select name="jumlah" class="form-control">
                                            <option value="zero">--== Jumlah barang ==--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Pemesan</label>
                                        <input type="text" class="form-control" name="nama_pemesan" placeholder="Nama Pemesan" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="">CP</label>
                                        <input type="text" class="form-control" name="cp" placeholder="Nomor yang dapat dihubungi" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="tujuan_pengirimans">Tujuan Pengiriman</label>
                                        <input type="text" class="form-control" name="tujuan_pengiriman" placeholder="Tujuan Pengiriman" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="bukti_transfers">Bukti Transfer</label>
                                        <div class="input-group input-file" name="bukti_transfer">
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
<!-- container-scroller -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<p class="fioreFont foot_cash" style="margin-bottom: 9%;">Fioregift</p>
				<p>Buka pukul 09.00 - 16.00<br>(Senin-Jumat)</p>
				<p>Buka pukul 10.00 - 15.00<br>(Sabtu)</p>
			</div>
			<div class="col-lg-5">
				<p class="fioreFont foot_cash" style="margin-bottom: 9%;">Kontak</p>
				<p class="sumFoot"><i class="fa fa-whatsapp" style="font-size:23px"></i> +6289685496528</p>
				<p class="sumFoot"><i class="fa fa-phone" style="font-size:23px"></i> 089685496528</p>		
			</div>
			<div class="col-lg-3">
				<p class="fioreFont foot_cash" style="margin-bottom: 9%;">Lokasi</p>
				<p>Jl. Arumba no.1 rt.rw/07.04<br>Tunggulwulung Lowokwaru, Malang<br>Kode pos 65146</p>				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<hr>
				<p>copyright fioregift_2019</p>
			</div>
		</div>
	</div>
</footer>

<?php $this->load->view('footer') ?>
