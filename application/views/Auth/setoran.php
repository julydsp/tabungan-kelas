<section class="content-header">
	<h1>
		Transaksi
		<small>Setoran</small>
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

	<!-- /.box-header -->

	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4>
			<i class="icon fa fa-info"></i> Total Setoran</h4>
				<h3>Rp  <?= number_format($total, 0, ',', '.');?></h3>
	</div>


	<div class="box box-primary">
		<div class="box-header">
			<a href="<?=base_url('setoran/add_setoran')?>" class="btn btn-primary">
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
							<th>NIS</th>
							<th>Nama</th>
							<th>Tanggal</th>
							<th>Setoran</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1 ?>
						<?php foreach($setor as $se):?>
						<tr>
							<td>
								<?= $no++ ?>		
							</td>
							<td>
								<?= $se['nis'];?>		
							</td>
							
							<td>
								<?= $se['nama_siswa'];?>
							</td>
							
							<td>
								<?= $se['tanggal'];?>				
							</td>
							
							<td>
								Rp  <?= number_format($se['setor'], 0, ',', '.');?>						
							</td>
							
							<td>

								<a href="<?=base_url('setoran/edit_setoran/'. $se['id_tabungan'])?>" title="Ubah"
								 class="btn btn-success btn-sm">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								<!-- <a href="<?=base_url('setoran/delete_setoran/'. $se['id_tabungan'])?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
								 title="Hapus" class="btn btn-danger btn-sm">
									<i class="glyphicon glyphicon-trash"></i> -->
									<a id="delete" href="#"
								title="Hapus" onclick="deleteSiswa('<?= $se['id_tabungan']; ?>', '<?= $se['nama_siswa']; ?>', '<?= number_format($se['setor'], 0, ',', '.');?>')" class="btn btn-sm btn-danger alert_notif">
								<i class="glyphicon glyphicon-trash"></i>
							
							</td>
						</tr>
						<?php endforeach?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<script>

function deleteSiswa(idTabungan, namaSiswa, setor) {
      // Use SweetAlert for confirmation
      Swal.fire({
         title: 'Apakah Anda yakin?',
         text: 'Anda akan menghapus Setoran siswa bernama ' + namaSiswa + ' dengan jumlah Setoran Rp ' + setor,
         icon: 'question',
         showCancelButton: true,
         confirmButtonColor: '#ff0000',
         cancelButtonColor: '#008000',
         confirmButtonText: 'Ya, Hapus!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
            window.location.href = '<?= base_url('setoran/delete_setoran/'); ?>' + idTabungan;
         }
      });
   }
</script>