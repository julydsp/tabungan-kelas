<section class="content-header">
	<h1>
		Transaksi
		<small>Ubah Setoran</small>
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
					<h3 class="box-title">Ubah tabungan</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">
						<input type="hidden" class="form-control" name="id_tabungan" class="form-control" value="<?= $id_tabungan?>"/>
						
						<div class="form-group">
							<input type="text" class="form-control" name="nis" class="form-control" value="<?=$siswa['nis']?>"readonly/>
						</div>

						<div class="form-group">
							<label>Nama siswa</label>
							<input class="form-control" name="nama_siswa" value="<?= $siswa['nama_siswa'] ?>"readonly/>
						</div>						        		    
						<div class="form-group">
							<label>Setoran</label>
							<input type="text" class="form-control rupiah" id="setor" name="setor" value="<?=$siswa['setor']?>"/>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?=base_url('setoran')?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Ambil nilai dari input setor
    var setorValue = document.getElementById('setor').value;

    // Hapus semua karakter selain angka
    var numericValue = setorValue.replace(/[^\d]/g, '');

    // Format rupiah
    var formattedValue = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(numericValue);

    // Tampilkan kembali pada input setor
    document.getElementById('setor').value = formattedValue;
});
</script>
<script>
jQuery(document).ready(function() {
    // Fungsi untuk memberikan format rupiah pada input setoran
    jQuery('.rupiah').on('input', function() {
        // Ambil nilai dari input
        var value = jQuery(this).val();

        // Hapus semua karakter selain angka
        value = value.replace(/[^\d]/g, '');

        // Hilangkan nol di depan angka (trimLeft)
        value = value.replace(/^0+/, '');

        // Ubah menjadi format rupiah
        // var formattedValue ='Rp ' + new Intl.NumberFormat('id-ID', { minimumFractionDigits: 0 }).format(value);
		var formattedValue = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(value);

        // Tampilkan kembali pada input setoran
        jQuery(this).val(formattedValue);
    });
});
</script>
