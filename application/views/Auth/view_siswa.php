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
<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<a href="<?= base_url('siswa/add_siswa')?>" title="Tambah Data" class="btn btn-primary">
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
							<th>JK</th>
							<th>Kelas</th>
							<th>Status</th>
							<th>Th Masuk</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1 ?>
						<?php foreach ($siswa as $s):?>
						
						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?= $s['nis']; ?>
							</td>
							<td>
								<?= $s['nama_siswa']; ?>
							</td>
							<td>
								<?= $s['jekel']; ?>
							</td>
							
							<td>
								<?= $s['kelas'];?>
							</td>
							
							<?php $warna = $s['status']  ?>
							<td>
								<?php if ($warna == 'Aktif') { ?>
								<span class="label label-primary">Aktif</span>
								<?php } elseif ($warna == 'Lulus') { ?>
								<span class="label label-success">Lulus</span>
								<?php } elseif ($warna == 'pindah') { ?>
								<span class="label label-danger">Pindah</span> <?php } ?>
							</td>
											
							<td>
								<?= $s['tahun_masuk'] ?>
							</td>
											
							<td>
								<a href="<?= base_url('siswa/edit_siswa/'. $s['nis']);?>" title="Ubah"
								class="btn btn-success">
								<i class="glyphicon glyphicon-edit"></i>
								</a>
								<a id="delete" href="#"
								title="Hapus" onclick="deleteSiswa('<?= $s['nis']; ?>', '<?= $s['nama_siswa']; ?>')" class="btn btn-sm btn-danger alert_notif">
								<i class="glyphicon glyphicon-trash"></i>
							</td>
						</tr>
						
						<?php endforeach?>
						<?php $no++ ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<script>

function deleteSiswa(nis, namaSiswa) {
      // Use SweetAlert for confirmation
      Swal.fire({
         title: 'Apakah Anda yakin?',
         text: 'Anda akan menghapus siswa bernama ' + namaSiswa + ' dengan NIS ' + nis,
         icon: 'question',
         showCancelButton: true,
         confirmButtonColor: '#ff0000',
         cancelButtonColor: '#008000',
         confirmButtonText: 'Ya, Hapus!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
            window.location.href = '<?= base_url('siswa/delete_siswa/'); ?>' + nis;
         }
      });
   }
</script>