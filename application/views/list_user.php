<div class="container">
  <h1 style="text-align:center;">DAFTAR BOOKING</h1>
  <a href="<?= base_url('Pemilik') ?>" style="text-align:center;"><< Kembali</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>CP</th>
        <th>Alamat</th>
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
          <td>
            <img src="<?= base_url('foto/profil/'.$row->id_user.'.jpg') ?>" width="150" height="170">
          </td>
          <td><?= $row->nama ?></td>
          <td><?= $row->cp ?></td>
          <td><?= $row->alamat ?></td>
          <td><?= $row->status ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
  </table>
</div>
