<section class="content-header">
	<h1>
		Pengguna Sistem
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>eTABS</b>
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
					<h3 class="box-title">Tambah Pengguna</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="<?=base_url('pengguna_sistem/tambah_pengguna')?>" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <!-- <div class="form-group">
	                        <label for="image-profil">Profil Pengguna</label>
							<input type="file" name="image-profil">
							<div class="invalid-feedback text-danger"></div>
                        </div> -->
                        <div class="form-group">
							<label for="exampleInputEmail1">Nama Pengguna</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama lengkap">
                            <div class="invalid-feedback text-danger"><?= form_error('nama') ?></div>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="text" name="email" id="email" class="form-control"  placeholder="Email">
                            <div class="invalid-feedback text-danger"><?= form_error('email') ?></div>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <div class="invalid-feedback text-danger"><?= form_error('password') ?></div>
						</div>

						<div class="form-group">
							<label>Level</label>
							<select name="level" id="level" class="form-control">
								<option value="">-- Pilih Level --</option>
								<option value="Administrasi">Administrator</option>
								<option value="petugas">Petugas</option>
							</select>
							<div class="invalid-feedback text-danger"><?= form_error('level') ?></div>
						</div>
					</div>
                    <!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="<?=base_url('pengguna_sistem')?>" title="Kembali" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
