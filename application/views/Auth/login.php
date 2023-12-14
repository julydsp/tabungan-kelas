	<div class="login-box">
	    <div class="login-logo">
	        <a href="#">
	            <h2><b>Elektronik Tabungan Siswa</h2></b>
	        </a>
	    </div>
	    <!-- /.login-logo -->
	    <div class="login-box-body">
	        <p class="login-box-msg text-bold">Silahkan Login</p>
	        <form id="login" action="" method="post">
	            <!-- <?= $this->session->flashdata('pesan'); ?> -->
	            <div class="form-group has-feedback">
	                <input type="email" class="form-control" name="email" style="color:black;" placeholder="Email" >
	                <span class="glyphicon glyphicon-user form-control-feedback"></span>
	                <small class="invalid-feedback text-danger"><?= form_error('email') ?></small>
	            </div>
	            <div class="form-group has-feedback">
	                <input type="password" class="form-control" name="password" placeholder="Password" >
	                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	                <small class="invalid-feedback text-danger"><?= form_error('password') ?></small>
	            </div>
	            <div class="row">
	                <div class="col-xs-8">
	                </div>
	                <!-- /.col -->
	                <div class="col-xs-4">
	                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="btnLogin" title="Masuk Sistem">
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

	<!-- alert ketika login menggunakan ajax -->
	<script>
	    $(document).ready(function() {
	        $('#login').submit(function(e) {
                e.preventDefault()
	            $.ajax({
	                type: 'POST',
	                url: '<?= base_url('Autentifikasi') ?>',
	                data: $('#login').serialize(),
	                dataType: 'json',
	                success: function(result) {
	                    console.log("sukses");
	                    if (result.success === true) {
	                        Swal.fire({
	                            title: 'Sukses!',
	                            text: "Anda berhasil Login",
	                            icon: 'success',
                                showConfirmButton: false,
	                        })
	                            window.location.href = '<?= base_url('dashboard') ?>';
	                    
	                    } else {
	                        Swal.fire({
	                            title: 'Error',
	                            text: "Login Gagal",
	                            icon: 'error',
	                        }).then(() => {
	                            window.location.href = '<?= base_url('autentifikasi') ?>';
	                        });
	                    }
	                }
	            });
	        });
	    })
	</script>