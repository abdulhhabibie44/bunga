<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Majestic Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/base/vendor.bundle.base.css') ?>">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') ?>">
	<!-- font -->
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome.min.css') ?>">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png') ?>" />
</head>

<body>
	<!-- partial:partials/_navbar.html -->
	<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
		<div class="navbar-brand-wrapper d-flex justify-content-center">
			<div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
				<a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url('assets/images/logo.svg') ?>" alt="logo" /></a>
				<a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('assets/images/logo-mini.svg') ?>" alt="logo" /></a>
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
					<span class="mdi mdi-sort-variant"></span>
				</button>
			</div>

		</div>
		<span style="margin-left: 60%;" class="nav-profile-name"> Admin</span>
		<span class="nav-profile-name"> || </span>
		<span style="margin-right: 5%" class="nav-profile-name"> <a href="<?php echo base_url('Login/logout') ?>"> Logout </a></span>

	</nav>