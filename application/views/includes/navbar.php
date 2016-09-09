<?php  
  $role     = $this->session->userdata('role');
  $username = $this->session->userdata('username');
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand page-scroll" href="<?= base_url('Home') ?>">Payo Ngekos</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php if($role == 'pemilik'): ?>
          <li><a href="<?= base_url('Pemilik/biodata') ?>">Lengkapi Biodata</a></li>
          <li><a href="<?= base_url('Pemilik/list_user') ?>">List Booking</a></li>
        <?php elseif($role == 'user'): ?>
          <li><a href="<?= base_url('User/biodata') ?>">Lengkapi Biodata</a></li>
          <li><a href="<?= base_url('User/cek_pembayaran') ?>">Cetak Bukti Pembayaran</a></li>
        <?php else: ?>
          <li></li>
        <?php endif; ?>
          <li>
              <?php
                  if(isset($username)){
                      echo '<a href="'.base_url('Logout').'">Logout</a>';
                  }
                  else{
                      echo '<a href="'.base_url('Login').'">Login</a>';
                  }
              ?>
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>