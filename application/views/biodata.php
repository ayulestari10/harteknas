<div class="container">
  <?php
    $id_pemilik   = $this->session->userdata('id_pemilik');
    $id_user      = $this->session->userdata('id_user');
    $msg          = $this->session->flashdata('msg');

    if(isset($msg)){
      echo $msg;
    }

    if(isset($id_pemilik)){
      echo form_open_multipart('Pemilik/biodata/'.$id_pemilik);
    }
    elseif(isset($id_user)){
      echo form_open_multipart('User/biodata/'.$id_user);
    }
    else{
      redirect('Home');
    }

  ?>

    <div class="row">
      <div class="col-md-8 col-md-offset-1">
          <h1>Biodata Pemilik Kosan</h1>
          <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat :</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
          </div>
          <!--<div class="form-group">
            <label for="cp">CP/No.HP :</label>
            <input type="text" class="form-control" id="cp" placeholder="Masukkan CP/No.HP">
          </div>-->
      </div>
    </div>

    <div class="row">
        <div class="col-md-1 col-md-offset-3">
          <input type="submit" value="Simpan" class="btn btn-success" name="edit"/>
        </div>
    </div>

<?php echo form_close(); ?>
</div>
