<style type="text/css">
  .profil{
    width: 210px; height: 260px; margin-top: 70%;
  }  
</style>

<div class="container">
  <?php
    $id_pemilik   = $this->session->userdata('id_pemilik');
    $id_user      = $this->session->userdata('id_user');
    $msg          = $this->session->flashdata('msg');

    if(isset($msg)){
      echo $msg;
    }

    if(isset($id_pemilik)){
      $id = $id_pemilik;
      echo form_open_multipart('Pemilik/biodata/'.$id_pemilik);
    }
    elseif(isset($id_user)){
      $id = $id_user;
      echo form_open_multipart('User/biodata/'.$id_user);
    }
    else{
      redirect('Home');
    }

  ?>

    <div class="row">
      <div class="col-md-2">
        <div class="profil">
          <img src="<?= base_url('foto/profil/'.$id.'.jpg') ?>" width="210" height="260">
        </div>
      </div>
      <div class="col-md-5 col-md-offset-2">
          <div style="margin-bottom:6%;">
            <h1 style="text-align:center;">Biodata</h1>
          </div>

          <div style="margin-bottom:5%;">
            <?php if(isset($id_pemilik)): ?>
              <a href="<?= base_url('Pemilik') ?>"><< Kembali</a>
            <?php endif; ?>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $dt->nama ?>" required>
          </div>
          <div class="form-group">
            <label for="profil">Upload Profil</label>
            <input type="file" name="userfile">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $dt->alamat ?>" required>
          </div>
          <div class="form-group">
            <label for="cp">CP/No.HP</label>
            <input type="text" class="form-control" id="cp" name="cp" value="<?= $dt->cp ?>">
          </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-1 col-md-offset-4">
          <input type="submit" value="Simpan" class="btn btn-success" name="add_biodata"/>
        </div>
    </div>

<?php echo form_close(); ?>
</div>
