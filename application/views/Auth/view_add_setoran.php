<!-- Content Header (Page header) -->

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

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Setoran</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form id="addSetoran" action="<?=base_url('setoran/add_setoran')?>" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<label>Siswa</label>
							<select name="nis" id="nis" class="form-control select2" style="width: 100%;">
                            <option selected="selected">-- Pilih --</option>							
                            <?php foreach ($tampil as $t):?>
                                <option value="<?= $t['nis'] ?>">
	                                <?= $t['nis']?>
                                    -
                                    <?= $t['nama_siswa']?>
                                </option>
                            <?php endforeach?>                       
                            </select>
						</div>
						
						<div class="form-group">
							<label>Saldo Tabungan</label>
							 <input type="text" name="setor" id="saldo" class="form-control rupiah" placeholder="Saldo" value="" readonly>
							
						</div>
						<div class="form-group">
							<label>Setoran</label>
							 <input type="text" name="setor" id="setor" class="form-control rupiah" placeholder="Jumlah setoran" required>
							
						</div>


					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="button" onclick="alertSuccesSetoran()" class="btn btn-info">Simpan</button>
      					<a href="<?=base_url('setoran')?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
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
        var formattedValue ='Rp ' + new Intl.NumberFormat('id-ID', { minimumFractionDigits: 0 }).format(value);

        // Tampilkan kembali pada input setoran
        jQuery(this).val(formattedValue);
    });

	$('#nis').change(function(){
        let nis = $('#nis').val();
        $.ajax({
            type: 'POST',
            url: '<?= base_url('setoran/getDetail')?>',
            data: {
                'nis': parseInt(nis),
            },
            dataType: 'json', 
            success: function(result) {
                if(result.success === true){
					console.log('berhasil');
					var formattedValue ='Rp ' + new Intl.NumberFormat('id-ID', { minimumFractionDigits: 0 }).format(result.nis);
                    $('#saldo').val(formattedValue); 
                }
            },
			 error: function(xhr, status, error) {

                console.error(xhr.responseText); // Log any errors to the console
            }

        });
    });
});

function alertSuccesSetoran() {
      // Use SweetAlert for confirmation
      Swal.fire({
         title: 'Apakah Anda yakin?',
         text: 'Anda akan menambahkan setoran!',
         icon: 'question',
         showCancelButton: true,
         confirmButtonColor: '#ff0000',
         cancelButtonColor: '#008000',
         confirmButtonText: 'Ya, Tambahkan!',
         cancelButtonText: 'Batal'
      }).then((result) => {
         if (result.isConfirmed) {
			 document.getElementById('addSetoran').submit();
		 }
      	});
}

// function updateSaldo() {
//         // Ambil NIS siswa yang dipilih
//         var nis = document.getElementById('nis').value;

//         // Lakukan request AJAX ke server untuk mendapatkan saldo berdasarkan NIS
//         $.ajax({
//             url: '<?= base_url('setoran/add_setoran/') ?>' + nis, // Ganti sesuai dengan URL di aplikasi Anda
//             type: 'GET',
//             success: function (response) {
//                 // Update nilai saldo pada input
//                 document.getElementById('saldo').value = response;
//             },
//             error: function (error) {
//                 console.log(error);
//             }
//         });
//     }

//     // Panggil fungsi updateSaldo() saat memilih siswa
//     document.getElementById('nis').addEventListener('change', updateSaldo);


   

</script>

