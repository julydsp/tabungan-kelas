<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Tabungan
		<small>Pencarian</small>
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
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Cari Siswa</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="<?=base_url('tabungan/data_tabungan');?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label>Siswa</label>
							<select name="nis" id="nis" class="form-control select2" style="width: 100%;">
								<option selected="selected">-- Pilih --</option>
								<?php foreach ($tampil as $t):?>
    							<option value="<?= $t['nis'] ?>">
        						<?= $t['nis']?>
        						-
        						<?= $t['nama_siswa']?>
    							</option>
								<?php endforeach?>                   
							</select required>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Lihat" value="Lihat" class="btn btn-primary">
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>