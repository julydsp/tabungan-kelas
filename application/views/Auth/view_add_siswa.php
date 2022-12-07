<section class="content-header">
	<h1>
		Master Data
		<small>Siswa</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>Tabsis</b>
			</a>
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Siswa</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove">
							<i class="fa fa-remove"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="<?= base_url('siswa/add_siswa');?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label>NIS</label>
							<input type="text" name="nis" id="nis" class="form-control" placeholder="NIS">
						</div>

						<div class="form-group">
							<label>Nama Siswa</label>
							<input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Nama Siswa">
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jekel" id="jekel" class="form-control" required>
								<option>-- Pilih --</option>
								<option value="Laki-laki" >Laki-laki</option>
								<option value="Perempuan" >Perempuan</option>
							</select>
						</div>

						<div class="form-group">
							<label>Kelas</label>
							<select name="kelas" id="kelas" class="form-control" required>
							<option>-- Pilih --</option>
							<?php foreach ($tampil as $t):?>
								<option value="<?= $t['id_kelas'] ?>">
									<?= $t['kelas']?>
								</option>
							<?php endforeach?>                     
							</select>
						</div>

						<div class="form-group">
							<label>Tahun Masuk</label>
							<input type="text" name="tahun_masuk" id="tahun_masuk" class="form-control" placeholder="Tahun Masuk">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="<?=base_url('siswa')?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>