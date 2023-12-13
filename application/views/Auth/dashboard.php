<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Administrator</small>
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-6 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h4>
						<?= $ttl_siswa?>
					</h4>

					<p>Siswa Aktif</p>
				</div>
				<a href="<?=base_url('siswa')?>">
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
				</a>

				<a href="<?=base_url('siswa')?>" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
		<!-- ./col -->

		<div class="col-lg-6 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h4>
						Rp  <?= number_format($total, 0, ',', '.');?>
					</h4>

					<p>Total Setoran</p>
				</div>
				<a href="<?=base_url('setoran')?>">
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
				</a>
				<a href="<?=base_url('setoran')?>" class="small-box-footer">More info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>


		<!-- ./col -->

	</div>

	<!-- /.box-body -->

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="box box-primary">
				<div class="box-header">
					<strong>Profil Sekolah</strong>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<?php foreach($profil as $p):?>
								<tr>
									<th>Nama Sekolah</th>
									<th>Alamat</th>
									<th>Akreditasi</th>
								</tr>
								<tr>
									<td>
										<?= $p['nama_sekolah'];?>
									</td>
									<td>
										<?= $p['alamat'];?>
									</td>
									<td>
										<?= $p['akreditasi'];?>
									</td>
								</tr>
								<?php endforeach ?>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>