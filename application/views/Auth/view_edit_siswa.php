<section class="content-header">
	<h1>
		Master Data
		<small>siswa</small>
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
					<h3 class="box-title">Ubah siswa</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form id="editSiswaForm" action="<?= base_url('siswa/edit_siswa/' . $siswa['nis']);?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						
						<div class="form-group">
							<label>NIS</label>
							<input type='text' class="form-control" name="nis" value="<?= $siswa['nis'] ?>"
							 readonly>
						</div>
						
						<div class="form-group">
							<label>Nama siswa</label>
							<input class="form-control" name="nama_siswa" value="<?= $siswa['nama_siswa'] ?>"
							/>
							<div class="invalid-feedback text-danger"><?= form_error('nama_siswa') ?></div>
						</div>
						
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jekel" id="jekel" class="form-control" >
								<option value="">-- Pilih --</option>
								<option value="Laki-laki"<?= ($siswa['jekel'] == 'Laki-laki') ?'selected':null;?>>Laki-laki</option>
								<option value="Perempuan"<?= ($siswa['jekel'] == 'Perempuan') ?'selected':null;?>>Perempuan</option>
							</select>
							<div class="invalid-feedback text-danger"><?= form_error('jekel') ?></div>
						</div>

						<div class="form-group">
							<label>Kelas</label>
							<select name="kelas" id="kelas" class="form-control">
								<?php foreach ($tampil as $t):?>
									<option value="<?= $t['id_kelas'] ?>">
									<?= $t['kelas']?>
								</option>
								<?php endforeach?>
							</select>
							<div class="invalid-feedback text-danger"><?= form_error('kelas') ?></div>
						</div>
						
						<div class="form-group">
							<label>Status</label>
							<select name="status" id="status" class="form-control" >
								<option value="">-- Pilih --</option>
								<option value="Aktif"<?= ($siswa['status'] == 'Aktif') ?'selected':null;?>>Aktif</option>
								<option value="Lulus"<?= ($siswa['status'] == 'Lulus') ?'selected':null;?>>Lulus</option>
								<option value="pindah"<?= ($siswa['status'] == 'pindah') ?'selected':null;?>>Pindah</option>
							</select>
							<div class="invalid-feedback text-danger"><?= form_error('status') ?></div>
						</div>
						
						<div class="form-group">
							<label>Th Masuk</label>
							<input class="form-control" name="tahun_masuk" value="<?= $siswa['tahun_masuk']?>">
							<div class="invalid-feedback text-danger"><?= form_error('tahun_masuk') ?></div>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="button" onclick="editForm()" class="btn btn-success">Ubah</button>
						<a href="<?=base_url('siswa')?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
<script>
function editForm() {
      // Use SweetAlert for confirmation
      Swal.fire({
         title: 'Apakah Anda yakin?',
         text: 'Anda akan mengubah data siswa!',
         icon: 'question',
         showCancelButton: true,
         confirmButtonColor: '#ff0000',
         cancelButtonColor: '#008000',
         confirmButtonText: 'Ya, Ubah!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
			document.getElementById('editSiswaForm').submit();
         }
      });
   }
</script>
