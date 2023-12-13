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
<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<a href="<?= base_url('Kelas/add_kelas')?>" title="Tambah Data" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse">
					<i class="fa fa-minus"></i>
				</button>
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Kelas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $n =1 ?>
						<?php foreach($kelas as $k):?>
						<tr>
							<td>
								<?= $n++ ;?>
							</td>
							<td>
								<?= $k['kelas']; ?>
							</td>
							<td>
								<a href="<?=base_url('kelas/edit_kelas/'. $k['id_kelas']);?>" title="Ubah"
								 class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								<a id="delete" href="#" onclick="deleteKelas('<?= $k['kelas'] ?>', '<?= $k['id_kelas']; ?>')"
								 title="Hapus" class="btn btn-danger">
									<i class="glyphicon glyphicon-trash"></i>
									</>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<script>

function deleteKelas(kelas, idKelas) {
      // Use SweetAlert for confirmation
      Swal.fire({
         title: 'Apakah Anda yakin?',
         text: 'Anda akan menghapus kelas ' + kelas + '!',
         icon: 'question',
         showCancelButton: true,
         confirmButtonColor: '#ff0000',
         cancelButtonColor: '#008000',
         confirmButtonText: 'Ya, Hapus!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
			 window.location.href = '<?=base_url('kelas/delete_kelas/'); ?>' + idKelas;
         }
      });
   }
</script>