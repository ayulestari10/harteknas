<style type="text/css">
	h2{text-align: center; margin-bottom: 2%;}
	a{list-style: none;}
</style>
<?php echo form_open('Login/admin'); ?>
	<div class="container">
	<?php
		$msg = $this->session->flashdata('msg');
		if(isset($msg)){
			echo $msg;
		}
	?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div style="margin-bottom: 10%;">	
					<h2>LOGIN ADMIN</h2>
					<div class="pilih">
						<a href="<?= base_url('Login/user') ?>">Member Kosan</a> | <a href="<?= base_url('Login/pemilik') ?>">Pemilik Kosan</a>
					</div>
				</div>
				<div class="form-group">
	                <label for="username">Username</label>
	                <input type="text" name="username" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="password">Password</label>
	                <input type="password" name="password" class="form-control" />
	            </div>
			</div>
      

	    </div>
	    <div class="row" style="margin-bottom: 2%; margin-top: 3%;">
		    <div class="col-md-6 col-md-offset-3">
	            <input type="submit" value="Login" class="btn btn-success" name="login" />
	            Belum ada akun ? klik <a href="<?= base_url('Register') ?>">Sign up >></a>
	        </div>
		</div>
	</div>
<?php echo form_close(); ?>
