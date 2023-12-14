<section class="content-header">
	<h1>
		Master Data
		<small>Kelas</small>
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
					<h3 class="box-title">Tambah Kelas</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form id="addKelasForm" action="<?= base_url('Kelas/add_kelas')?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label>Kelas</label>
							<input type="text" name="kelas" id="kelas" class="form-control" placeholder="Kelas">
							<small class="invalid-feedback text-danger"><?= form_error('kelas') ?></small>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="button" onclick="submitForm()" name="Simpan" value="Simpan" class="btn btn-info">Simpan</button>
						<a href="<?=base_url('kelas');?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
        </div>
    </div>	<!-- /.box -->
</section>
<!-- alert saat menambahkan kelas  -->
<script>
function submitForm() {
      Swal.fire({
         title: 'Apakah Anda yakin?',
         text: 'Anda akan menambahkan kelas!',
         icon: 'question',
         showCancelButton: true,
         confirmButtonColor: '#ff0000',
         cancelButtonColor: '#008000',
         confirmButtonText: 'Ya, Tambahkan!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
			 document.getElementById('addKelasForm').submit();
         }
      });
   }
</script>
    
