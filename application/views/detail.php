<div class="container" id="detail">
  <div class="row">
    <div class="col-lg-6 detail_image">
      <div class="col-sm-6">
          <div>
            <img class="img-rounded" src="<?= base_url('foto/kosan/'.$dt->id_pemilik) ?>" alt="">
          </div>
      </div>
    <!--  <div class="col-sm-6">
          <div>
            <img class="img-rounded" src="foto/kosan/2.jpg" alt="">
          </div>
      </div>
      <div class="col-sm-12 jarak">

      </div>
      <div class="col-sm-6">
          <div>
            <img class="img-rounded" src="foto/kosan/3.jpg" alt="">
          </div>
      </div>
      <div class="col-sm-6">
          <div>
            <img class="img-rounded" src="foto/kosan/4.jpg" alt="">
          </div>
      </div>-->
    </div>
    <div class="col-lg-6 detail_informasi">
          <div>
            <table class="table table_informasi">
              <tr>
                <td>Nama Kosan</td>
                <td>:</td>
                <td><?= $dt->nama_kosan ?></td>
              </tr>
              <tr>
                <td>Harga Sewa</td>
                <td>:</td>
                <td><?= $dt->harga ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $dt->alamat_kosan ?></td>
              </tr>
              <tr>
                <td>Sifat Kosan</td>
                <td>:</td>
                <td><?= $dt->sifat_kosan ?></td>
              </tr>
              <tr>
                <td>Stok</td>
                <td>:</td>
                <td><?= $dt->stok ?></td>
              </tr>
            </table>
            <div class="well tambahan">
              <p><?= $dt->detail ?></p>
            </div>

            <?php echo form_open_multipart('User/order'); ?>
            <!--<a href="" class="btn btn-info btn-md" data-toggle="modal" data-target="#daftar">-->
              <div class="row" style="margin-left:10%; margin-top:5%;">
                ORDER >> <input type="submit" name="order" value="<?= $dt->nama_kosan ?>" class="btn btn-warning"></input>
              </div>
            <!--</a>-->
            <?php echo form_close(); ?>
          </div>
    </div>
  </div>
</div>

<!-- daftar -->
<div class="modal fade" id="daftar" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Anda harus Daftar terlebih dahulu</h4>
      </div>
      <div class="modal-body">
        <form class="" action="#" method="post">
          <div class="form-group">
            <label for="nama">Nama :</label>
        		<input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="pass">Password :</label>
        		<input type="password" class="form-control" id="pass" name="password" required>
          </div>
        </form>
        <p>
          Sedah Daftar? <a href=""  data-toggle="modal" data-target="#login">Login</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="">Daftar</button>
      </div>
    </div>

  </div>
</div>
<!-- login -->
<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body">
        <form class="" action="#" method="post">
          <div class="form-group">
            <label for="nama">Nama :</label>
        		<input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="pass">Password :</label>
        		<input type="password" class="form-control" id="pass" name="password" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="">Login</button>
      </div>
    </div>

  </div>
</div>
