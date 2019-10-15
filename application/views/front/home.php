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
<div class="heSpace">	
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<img class="logo_front" src="<?php echo base_url('assets/images/logo.svg') ?>" alt="logo" />
		</div>	
		<div class="col-lg-8">
			<ul>
				<li><a class="link_sub" href="<?php echo base_url('Home');?>">BERANDA</a></li>
				<li><a class="link_sub" href="<?php echo base_url('Produk_user');?>">PRODUK</a></li>						
			</ul>
		</div>	
	</div>
</div>
</div>
<div class="back1">	
<div class="container">  
	<div class="row">
		<div class="col-lg-7">
			<p class="judul_fiore">FIORE | Bouquet Gift</p>
			<p class="sub_subs">Berbagi keindahan dan kebahagiaan</p>
			<p class="sub_subs">disetiap momen berhargamu</p>
			<!-- <p class="judul_fiore">FIORE | Bouquet Gift</p> -->
		</div>	
		<div class="col-lg-5">

		</div>	
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4">

		</div>		
		<div class="col-lg-4">
			<p class="recom" align="center">~ REKOMENDASI ~</p>
		</div>		
		<div class="col-lg-4">

		</div>				
	</div>
</div>
<div class="container" style="margin-top: 3.5%;">
	<div class="row">

    <?php $no = 1;
    foreach ($array as $key) { ?>

		<div class="col-lg-3">

					<center><img style="width: 100%;" src="<?php echo ($key['nama_foto'] != '' ? base_url('./upload/produk/' . $key['nama_foto']) : base_url('./upload/nama_foto/img_defautl.jpg')); ?>"></center>
<!-- 					<p align="center" class="title_product">Razor X Alpha</p>
					<p align="center" class="title_product">250.000 IDR</p> -->
					<center><a style="margin-top: 6%;" href="" class="btn btn-success"><i class="fa fa-shopping-cart" style="font-size:17px"></i> PESAN SEKARANG</a></center>
<!-- 					<center><input value="PESAN SEKARANG" type="button" data-toggle="modal" data-target="#myModal2" id="star_1" class="form-control btn-core"></center> -->

		</div>
		<?php 
		if ($no==4 || $no==8 || $no==12 || $no==16 || $no==20) { ?>
			<div style="margin-bottom: 34%;">
			</div>
		<?php }

		$no++; } ?>

</div>
</div>

<div class="back2">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<img width="100%;" src="<?php echo base_url('assets/images/fin.png'); ?>">
			</div>
			<div class="col-lg-1">

			</div>
			<div class="col-lg-5">
				<p class="fioreFont foot_mid" style="margin-bottom: 9%;">~ Nunggu apa lagi?</p>				
				<p>Jangan buat momen penting berlalu begitu saja, fioregift siap bantuin kamu untuk siapkan yang terbaik, perpaduan antara snack dengan hadiah spesialmu akan menambah<br>
				kesan indah dan elegan yang menawan.</p>
			</div>
			<div class="col-lg-2">
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-5">
				<p class="fioreFont foot_mid2" style="margin-bottom: 9%;">~ Kuy Ikuti Kami</p>				
				<p>Selalu update, bagikan momen seru kita ke dunia, dan jangan lupa ikuti kami di media sosial juga ya untuk lihat model-model terbaru.</p>			
		</div>
		<div class="col-lg-3">
			
		</div>
		<div class="col-lg-4">
			<p style="color: #e67e22; margin-top: 30%; font-size: 160%;"><i class="fa fa-instagram" style="font-size:37px"></i>  fioregift_</p>
			<p style="color: #3498db; margin-top: 10%; font-size: 160%;"><i class="fa fa-facebook" style="font-size:37px"></i>  fiore gift</p>
			<p style="color: #e74c3c; margin-top: 10%; font-size: 160%;"><i class="fa fa-youtube-play" style="font-size:37px"></i>  fiore gift</p>
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