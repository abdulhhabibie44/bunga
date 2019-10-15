<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
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
<div class="back3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<p class="fioreFont title_produk">PRODUCT</p>
			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 10%;">
	<div class="row">

    <?php $no = 1;
    foreach ($array as $key) { ?>

		<div class="col-lg-3">

					<center><img style="width: 100%;" src="<?php echo ($key['nama_foto'] != '' ? base_url('./upload/produk/' . $key['nama_foto']) : base_url('./upload/nama_foto/img_defautl.jpg')); ?>"></center>
<!-- 					<p align="center" class="title_product">Razor X Alpha</p>
					<p align="center" class="title_product">250.000 IDR</p> -->
					<center><a style="margin-top: 6%;" href="<?php echo base_url('Transaksi/transaksi/'.$key['id_produk']);  ?>" class="btn btn-success"><i class="fa fa-shopping-cart" style="font-size:17px"></i> PESAN SEKARANG</a></center>
<!-- 					<center><input value="PESAN SEKARANG" type="button" data-toggle="modal" data-target="#myModal2" id="star_1" class="form-control btn-core"></center> -->

		</div>
		<?php 
		if ($no==4 || $no==8 || $no==12 || $no==16 || $no==20) { ?>
			<div style="margin-bottom: 34%;">
			</div>
		<?php }

		$no++; } ?>

</div>
<div class="row" style="margin-top: 6%;">
		<div class="col-lg-3">

				<div class="cards">
					<center><img style="width: 100%;" src="<?php echo base_url('assets/images/p8.jpg'); ?>"></center>
					<p align="center" class="title_product">Razor X Alpha</p>
					<p align="center" class="title_product">250.000 IDR</p>
					<center><input value="PESAN SEKARANG" type="button" data-toggle="modal" data-target="#myModal2" id="star_1" class="form-control btn-core"></center>
				</div>	

		</div>
		<div class="col-lg-3">
				<div class="cards">
					<center><img style="width: 100%;" src="<?php echo base_url('assets/images/p9.jpg'); ?>"></center>
					<p align="center" class="title_product">Razor X Alpha</p>
					<p align="center" class="title_product">250.000 IDR</p>
					<center><input value="PESAN SEKARANG" type="button" data-toggle="modal" data-target="#myModal2" id="star_1" class="form-control btn-core"></i></center>
				</div>
		</div>
		<div class="col-lg-3">
				<div class="cards">
					<center><img style="width: 100%;" src="<?php echo base_url('assets/images/p10.jpg'); ?>"></center>
					<p align="center" class="title_product">Razor X Alpha</p>
					<p align="center" class="title_product">250.000 IDR</p>
					<center><input value="PESAN SEKARANG" type="button" data-toggle="modal" data-target="#myModal2" id="star_1" class="form-control btn-core"></i></center>
				</div>
		</div>
		<div class="col-lg-3">
				<div class="cards">
					<center><img style="width: 100%;" src="<?php echo base_url('assets/images/p2.jpg'); ?>"></center>
					<p align="center" class="title_product">Razor X Alpha</p>
					<p align="center" class="title_product">250.000 IDR</p>
					<center><input value="PESAN SEKARANG" type="button" data-toggle="modal" data-target="#myModal2" id="star_1" class="form-control btn-core"></i></center>
				</div>
		</div>		
	</div>
</div>

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
	
</body>
</html>