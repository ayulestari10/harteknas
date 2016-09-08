<style type="text/css">
	h2{text-align: center; margin-bottom: 15%;}
</style>
<?php echo form_open_multipart('Register/pemilik_masuk'); ?>
	<div class="container">
	<?php
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
	?>
		<div class="row">
			<div class="col-md-5 col-md-offset-4">
				<h2>Daftar Akun</h2>
				<div class="pilih">
					<a href="<?= base_url('Register/user') ?>">Member Kosan</a> | <a href="<?= base_url('Register/pemilik') ?>">Pemilik Kosan</a>
				</div>
		        <div class="form-group">
		          <label for="Username">Username</label>
		      		<input type="text" class="form-control" id="nama" name="username" required>
		        </div>
		        <div class="form-group">
		          <label for="Password">Password</label>
		      		<input type="password" class="form-control" id="pass" name="password" required>
		        </div>
		        <div class="form-group">
		          <label for="Password2">Konfirmasi Password</label>
		      		<input type="password" class="form-control" id="pass" name="password2" required>
		        </div>
			</div>
	    </div>
	    <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
		    <div class="col-md-1 col-md-offset-4">
            <input type="submit" value="Daftar" class="btn btn-success" name="daftar"></input>
        </div>
		</div>
	</div>
<?php echo form_close(); ?>
