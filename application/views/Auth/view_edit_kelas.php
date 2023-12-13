<section class="content-header">
	<h1>
		Master Data
		<small>Kelas</small>
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
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah Kelas</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<?php foreach ($kelas as $k):?>
				<!-- form start -->
				<form id="editKelas" action="<?=base_url('kelas/edit_kelas/'. $k['id_kelas']);?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<input type='hidden' class="form-control" name="id_kelas" value="<?= $id_kelas ?>"
						 readonly/>
					<div class="form-group">
						<label>Kelas</label>
						<input class="form-control" name="kelas" value="<?= $k['kelas']?>"
						/>
						<small class="invalid-feedback text-danger"><?= form_error('kelas') ?></small>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="button" name="Ubah" value="Ubah" onclick="editForm()" class="btn btn-success">Ubah</button>
						<a href="<?=base_url('kelas')?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
				<?php endforeach ?>
			</div>
			<!-- /.box -->
</section>
<script>
function editForm() {
      // Use SweetAlert for confirmation
      Swal.fire({
         title: 'Apakah Anda yakin?',
         text: 'Anda akan mengubah data kelas!',
         icon: 'question',
         showCancelButton: true,
         confirmButtonColor: '#ff0000',
         cancelButtonColor: '#008000',
         confirmButtonText: 'Ya, Ubah!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
			 document.getElementById('editKelas').submit();
         }
      });
   }
</script>