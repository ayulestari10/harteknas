
<section id="dashboard" class="bg-light-gray">
    <div class="container">
      <div class="row">
        <?php
          $id_user = $this->session->userdata('id_user');
          $msg = $this->session->flashdata('msg');

          if(isset($msg)){
            echo $msg;
          }
        ?>
      </div>
      <div class="row" style="margin-top:-5%;">
        <?php foreach($dt as $row): ?>
          <div class="col-md-4 dashboard-item" style="margin-left:10%;">
              <a href="" class="dashboard-link">
                <div class="dashboard-hover">
                    <div class="dashboard-hover-content">
                        <h3>DETAIL INFORMASI</h3>
                    </div>
                </div>
                  <img src="foto/kosan/1.jpg" class="img-responsive" alt="Image">
              </a>
              <div class="portfolio-caption">
                  <table class="table">
                    <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td><?= $row->nama_kosan ?></td>
                    </tr>
                    <tr>
                      <td>Harga Sewa</td>
                      <td>:</td>
                      <td><?= $row->harga ?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>:</td>
                      <td><?= $row->alamat_kosan ?></td>
                    </tr>
                    <tr>
                      <td>Sifat Kosan</td>
                      <td>:</td>
                      <td><?= $row->sifat_kosan ?></td>
                    </tr>
                    <tr>
                      <td>Stok</td>
                      <td>:</td>
                      <td><?= $row->stok ?></td>
                    </tr>
                  </table>
              </div> <!-- portfolio-caption -->
              <a href="<?= base_url('Home/detail/'.$row->id_pemilik) ?>" class="btn btn-default btn-md">Detail Informasi</a>
              <?php echo form_open_multipart('User/order'); ?>
                <div class="row" style="margin-left:10%; margin-top:5%;">
                  ORDER >> <input type="submit" name="order" value="<?= $row->nama_kosan ?>" class="btn btn-warning"></input>
                </div>
              <?php echo form_close(); ?>
          </div>  <!-- end col-md-4 col-sm-6 portfolio-item -->
        <?php endforeach; ?>
      </div>  <!-- end row -->
    </div> <!-- end container -->
</section>
