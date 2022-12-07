<section class="content-header">
	<h1>
		Pengguna Sistem
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
	<div class="box-header">
	<a href="<?=base_url('pengguna_sistem/tambah_pengguna') ?>" class="btn btn-primary">
		<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
	<div class="box-tools pull-right">
		<button type="button" class="btn btn-box-tool" data-widget="collapse">
			<i class="fa fa-minus"></i>
		</button>
		<button type="button" class="btn btn-box-tool" data-widget="remove">
			<i class="fa fa-remove"></i>
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
							<th>Nama</th>
							<th>Email</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					
					<tbody>
					<?php $n = 1?>
					<?php foreach ($pengguna as $p) : ?>
						<tr>
							<td>
								<?= $n++; ?>
							</td>
							<td>
								<?= $p['nama']; ?>
							</td>
							<td>
								<?= $p['email']; ?>
							</td>
							<td>
								<?= $p['level']; ?>
							</td>
							<td>
								<a href="<?= base_url('pengguna_sistem/edit_pengguna/'. $p['id_user']);?>"
								 title="Ubah" class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								<a href="<?= base_url('pengguna_sistem/delete_pengguna/'. $p['id_user']);?>"
								 onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger">
									<i class="glyphicon glyphicon-trash"></i>
                                </a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</section>