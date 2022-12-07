
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
						<button type="button" class="btn btn-box-tool" data-widget="remove">
							<i class="fa fa-remove"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Sekolah</th>
									<th>Alamat</th>
									<th>Akreditasi</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($profil as $profile) : ?>
								<tr>
									<td>
										<?= $profile['id'];?>
									</td>
									<td>
										<?= $profile['nama_sekolah'];?>
									</td>
									<td>
										<?= $profile['alamat'];?>							
									</td>
									<td>
										Akreditasi
									<?= $profile['akreditasi'];?>
									</td>
									<td>
										<a href="<?= base_url('profil_sekolah/edit/'.$profile['id']);?>" title="Ubah"
								 		class="btn btn-success">
										<i class="glyphicon glyphicon-edit"></i>
										</a>
									</td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>