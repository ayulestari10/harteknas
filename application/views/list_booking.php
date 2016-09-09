<div class="container">
  <h1>DAFTAR BOOKING</h1>
  <div class="">
    <a href="<?= base_url('Admin/pemilik') ?>" class="btn btn-warning btn-sm">List Pemilik</a>
    <a href="<?= base_url('Admin/user') ?>" class="btn btn-info btn-sm">List Pembeli</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Kosan</th>
        <th>Bukti pembayaran</th>
      </tr>
    </thead>
      <tbody>
      <?php
        $i=0; 
        foreach($dt as $row): 
      ?>
        <tr>
          <td><?= ++$i ?></td>
          <td><?= $row->nama ?></td>
          <td><?= $row->nama_kosan ?></td>
          <td>
            <?php if ($row->status == 'Belum konfirmasi'): ?>
              <a class="btn btn-warning" href="<?= base_url('Admin/verifikasi/'.$row->id_user) ?>"><i class="glyphicon glyphicon-remove"></i> Tidak Terverifikasi</a>
            <?php else: ?>
              <a class="btn btn-success" href="<?= base_url('Admin/verifikasi/'.$row->id_user) ?>"><i class="glyphicon glyphicon-ok"></i> Terverifikasi</a>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
  </table>
</div>
