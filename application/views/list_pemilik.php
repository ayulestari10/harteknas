<div class="container">
  <h1>DAFTAR PRMILIK KOSAN</h1>
  <div class="">
    <a href="<?= base_url('Admin') ?>" class="btn btn-warning btn-sm">List Booking</a>
    <a href="<?= base_url('Admin/user') ?>" class="btn btn-info btn-sm">List Pembeli</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Kosan</th>
        <th>Alamat</th>
        <th>CP</th>
        <th>Opsi</th>
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
          <td><?= $row->alamat ?></td>
          <td><?= $row->cp ?></td>
          <td>
            <a href="<?= base_url('Admin/delete_pemilik/'.$row->id_pemilik) ?>" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
  </table>
</div>
