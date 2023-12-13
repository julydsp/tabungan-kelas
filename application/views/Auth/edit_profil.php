<section class="content-header">
	<h1>
		Profil Sekolah
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
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah Profil</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<input type='text' class="form-control" name="id" value="<?= $sekolah['id']?>"
							 readonly/>
							 <div class="invalid-feedback text-danger"><?= form_error('status') ?></div>
						</div>

						<div class="form-group">
							<label>Nama Sekolah</label>
							<input class="form-control" name="nama_sekolah" value="<?= $sekolah['nama_sekolah']?>"/>
							<div class="invalid-feedback text-danger"><?= form_error('status') ?></div>
						</div>

						<div class="form-group">
							<label>alamat</label>
							<input class="form-control" name="alamat" value="<?= $sekolah['alamat']?>"
							/>
							<div class="invalid-feedback text-danger"><?= form_error('status') ?></div>
						</div>

						<div class="form-group">
							<label>Akreditasi</label>
							<input type="text" class="form-control" name="akreditasi" value="<?= $sekolah['akreditasi']?>"
							/>
							<div class="invalid-feedback text-danger"><?= form_error('status') ?></div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url('profil_sekolah');?>" title="Kembali" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
		</div>	
	</div>
</section>


