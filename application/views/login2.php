<div class="container">
  <?= form_open("login/user") ?>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control" />
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" />
    </div>
    <center>
      <input type="submit" name="login" value="Login" class="btn btn-success" /> 
      Belum ada akun ? klik <a href="<?= base_url('Register') ?>">Sign up >></a>
    </center>
  <?= form_close() ?>
</div>
