	
    <div class="login-box">
		<div class="login-logo">
			<a href="#">
				<h2><b>Elektronik Tabungan Siswa</h2></b>
				</a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">=== Login System ===</p>
			<form id="login" action="<?=base_url('Autentifikasi')?>" method="post">
            <!-- <?= $this->session->flashdata('pesan'); ?> -->
				<div class="form-group has-feedback">
					<input type="email" class="form-control" name="email" style="color:black;" placeholder="Email" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <!-- <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> -->
					<small class="invalid-feedback text-danger"><?= form_error('email') ?></small>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <!-- <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> -->
					<small class="invalid-feedback text-danger"><?= form_error('password') ?></small>
				</div>
				<div class="row">
					<div class="col-xs-8">
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" onclick="submitForm()" class="btn btn-primary btn-block btn-flat" name="btnLogin" title="Masuk Sistem">
							<b>Masuk</b>
						</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<!-- /.social-auth-links -->

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->
	<script>
function submitForm() {
   // Use SweetAlert for success message
   Swal.fire({
      title: 'Sukses!',
      text: 'Anda berhasil Login',
      icon: 'success',
      confirmButtonColor: '#008000', // Change the color to green
      confirmButtonText: 'OK'
   }).then((result) => {
      if (result.isConfirmed) {
         document.getElementById('login').submit();
         // If confirmed, redirect to delete action
         // window.location.href = '' + nis;
      }
   });
}
</script>
  <!-- <script>
        function submitForm() {
            // Trigger the login process
            $.ajax({
                type: 'POST',
                url: '<?= base_url('Autentifikasi') ?>',
                data: $('#login').serialize(),
                dataType: 'json',
                success: function(result) {
                    if (result.success) {
                        // If login is successful, show SweetAlert and redirect
                        Swal.fire({
                            title: 'Sukses!',
                            text: 'Anda berhasil Login',
                            icon: 'success',
                            confirmButtonColor: '#008000',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '<?= base_url('dashboard') ?>';
                            }
                        });
                    } else {
                        // If login fails, show SweetAlert with an error message
                        Swal.fire({
                            title: 'Error!',
                            text: result.message,
                            icon: 'error',
                            confirmButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }
    </script> -->
