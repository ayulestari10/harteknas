<style type="text/css">
  .img_kosan{
    width: 250px; height: 250px; border: 1px solid black;
  }
</style>

<div class="container">
<?php
  $id_pemilik   = $this->session->userdata('id_pemilik');
  $msg          = $this->session->flashdata('msg');

  if(isset($msg)){
    echo $msg;
  }

  if(isset($id_pemilik)){
    echo form_open_multipart('Pemilik/edit/'.$id_pemilik);
  } else {
    echo form_open_multipart('Pemilik/edit/');
  }
?>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div style="margin-bottom:10%; ">
          <h3 style="text-align:center;">INPUT DATA KOSAN</h3>
        </div>
          <div class="form-group">
            <label for="harga">Nama Kosan :</label>
            <input type="text" class="form-control" id="nama_kosan" name="nama_kosan" value="<?= $dt->nama_kosan ?>" required>
          </div>
          <?php if(isset($dt->foto1)): ?>
            <div class="img_kosan">
              <img src="<?= base_url('foto/kosan/'.$dt->id_pemilik.'.jpg') ?>" width="250" height="250">
            </div>
          <?php endif; ?>
          <div class="form-group">
            <label for="foto1">Upload Foto</label>
        		<input type="file" name="userfile" required>
          </div>
          <div class="form-group">
            <label for="harga">Harga Sewa/ Tahun :</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $dt->harga ?>" required>
          </div>
          <div class="form-group">
            <label for="alamat_kosan">Alamat Kosan :</label>
            <input type="text" class="form-control" id="alamat" name="alamat_kosan" value="<?= $dt->alamat_kosan ?>" required>
          </div>
          <div class="form-group">
            <label for="sifat_kosan">Sifat Kosan :</label>
            <input type="text" class="form-control" id="alamat" name="sifat_kosan" value="<?= $dt->sifat_kosan ?>" required>
          </div>
          <div class="form-group">
            <label for="cp">CP/No.HP :</label>
            <input type="text" class="form-control" id="cp" name="cp" value="<?= $dt->cp ?>" >
          </div>
          <div class="form-group">
            <label for="stok">Stok Kosan :</label>
            <input type="text" class="form-control" id="stok" name="stok" value="<?= $dt->stok ?>">
          </div>
          <div class="form-group">
            <label for="detail">Fasilitas :</label>
            <textarea class="form-control" rows="5" id="fasilitas" name="detail" required><?= $dt->detail ?></textarea>
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-1 col-md-offset-3">
      <input type="submit" class="btn btn-info" name="edit" value="Simpan"></input>
    </div>
  </div>

<?php echo form_close(); ?>
</div>
