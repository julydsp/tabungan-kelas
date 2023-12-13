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
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form id="addSiswaForm" action="<?= base_url('siswa/add_siswa');?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="nis">Nis</label>
							<input type="number" name="nis" id="nis" class="form-control" placeholder="NIS">
							<small class="invalid-feedback text-danger"><?= form_error('nis') ?></small>
						</div>

						<div class="form-group">
							<label for="nama_siswa">Nama Siswa</label>
							<input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Nama Siswa">
							<small class="invalid-feedback text-danger"><?= form_error('nama_siswa') ?></small>
						</div>

						<div class="form-group">
							<label>Jenis kelamin</label>
							<select name="jekel" id="jekel" class="form-control" >
								<option value="">-- Pilih --</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<small class="invalid-feedback text-danger"><?= form_error('jekel') ?></small>
						</div>


						<div class="form-group">
							<label for="kelas">Kelas</label>
							<select name="kelas" id="kelas" class="form-control" >
							<option value="">-- Pilih --</option>
							<?php foreach ($tampil as $t):?>
								<option value="<?= $t['id_kelas'] ?>">
									<?= $t['kelas']?>
								</option>
							<?php endforeach?>                     
							</select>
							<small class="invalid-feedback text-danger"><?= form_error('kelas') ?></small>
						</div>

						<div class="form-group">
							<label for="status">Status</label>
							<select name="status" id="status" class="form-control">
								<option value="">-- Pilih --</option>
								<option value="Aktif">Aktif</option>
								<option value="Lulus">Lulus</option>
								<option value="pindah">Pindah</option>
							</select>
							<small class="invalid-feedback text-danger"><?= form_error('status') ?></small>
						</div>

						<div class="form-group">
							<label for="tahun_masuk">Tahun Masuk</label>
							<input type="text" name="tahun_masuk" id="tahun_masuk" class="form-control" placeholder="Tahun Masuk">
							<div class="invalid-feedback text-danger"><?= form_error('tahun_masuk') ?></div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<!-- <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="" class="btn btn-warning">Batal</a> -->
						<button type="button" onclick="submitForm()" class="btn btn-info">Simpan</button>
      					<a href="<?=base_url('siswa')?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
<script>

function submitForm() {
      // Use SweetAlert for confirmation
      Swal.fire({
         title: 'Apakah Anda yakin?',
         text: 'Anda akan menambahkan siswa!',
         icon: 'question',
         showCancelButton: true,
         confirmButtonColor: '#ff0000',
         cancelButtonColor: '#008000',
         confirmButtonText: 'Ya, Tambahkan!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
			 document.getElementById('addSiswaForm').submit();
            // If confirmed, redirect to delete action
            // window.location.href = '' + nis;
         }
      });
   }
</script>

 