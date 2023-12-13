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
			<i class="icon fa fa-info"></i> info Tabungan
        </h4>
        <hr>
				<h3> Saldo Tabungan = Rp  <?= number_format($total, 0, ',', '.');?></h3>
				
	</div>


	<div class="box box-primary">
		<div class="box-header">
			<a href="<?=base_url('tabungan')?>" class="btn btn-primary">
                <i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
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
							
							<td align="">
								 Rp  <?= number_format($se['setor'], 0, ',', '.');?>					
							</td>
						</tr>
						<?php endforeach?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
