
<!-- =============================================== -->
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		</<b>
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?=base_url('dist/img/avatar.png')?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>
					<?= 'JULY DWI SAPUTRA'?>
				</p>
				<span class="label label-success">
					<?php echo 'administrasi' ?>
				</span>
			</div>
		</div>
		</br>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<!-- Level  -->
			<li class="treeview">
				<a href="<?= base_url('dashboard');?>">
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
					<span class="pull-right-container">
					</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-folder"></i>
					<span>Master Data</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?= base_url('siswa');?>">
						<i class="fa fa-users"></i>Siswa</a>
					</li>
					<li>
						<a href="<?= base_url('Kelas');?>">
						<i class="fa fa-feed"></i>Kelas</a>
					</li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-refresh"></i>
					<span>Transaksi</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?= base_url('Setoran');?>">
							<i class="fa fa-arrow-circle-o-down"></i>Setoran</a>
					</li>
				</ul>
			</li>
			<li class="treeview">
				<a href="<?= base_url('tabungan');?>">
					<i class="fa fa-book"></i>
					<span>Tabungan</span>
					<span class="pull-right-container">
					</span>
				</a>
			</li>
			<li class="header">SETTING</li>
			<li class="treeview">
				<a href="<?= base_url('pengguna_sistem');?>">
					<i class="fa fa-user"></i>
					<span>Pengguna Sistem</span>
					<span class="pull-right-container">
					</span>
				</a>
			</li>
			<li class="treeview">
				<a href="<?= base_url('profil_sekolah');?>">
					<i class="fa fa-bank"></i>
					<span>Profil Sekolah</span>
					<span class="pull-right-container">
					</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('autentifikasi')?>" onclick="return confirm('Anda yakin keluar dari aplikasi ?')">
					<i class="fa fa-sign-out"></i>
					<span>Logout</span>
					<span class="pull-right-container"></span>
				</a>
			</li>
	</section>
	<!-- /.sidebar -->
</aside>
<!-- =============================================== -->
<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">

