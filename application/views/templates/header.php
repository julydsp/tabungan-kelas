<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tabungan Siswa</title>
	<link rel="icon" href="dist/img/logo.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->	
	<link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css')?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?=base_url('plugins/datatables/dataTables.bootstrap.css')?>">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?=base_url('plugins/select2/select2.min.css')?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('dist/css/AdminLTE.min.css')?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?=base_url('dist/css/skins/_all-skins.min.css')?>">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition skin-red sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">
	<header class="main-header">
		<!-- Logo -->
		<a href="index.php" class="logo">
			<span class="logo-lg">
				<img src="<?=base_url('dist/img/logo.png')?>" width="45px">
				<b>Tabsis</b>
			</span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Messages: style can be found in dropdown.less-->
					<li class="dropdown messages-menu">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<?php foreach($profil as $p):?>
							<span>
								<b>
									<?= $p['nama_sekolah'];?>
								</b>
							</span>
							<?php endforeach ?>
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	
