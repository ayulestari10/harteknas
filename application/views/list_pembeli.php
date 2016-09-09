<div class="container">
  <h1>DAFTAR PEMBELI KOSAN</h1>
  <div class="">
    <a href="<?= base_url('Admin/pemilik') ?>" class="btn btn-warning btn-sm">List Pemilik</a>
    <a href="<?= base_url('Admin') ?>" class="btn btn-info btn-sm">List Booking</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama Pembeli</th>
        <th>Alamat Pembeli</th>
        <th>Kosan Yang Ditempati</th>
        <th>CP</th>
        <th>Aksi</th>
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
          <td><?= $row->alamat ?></td>
          <td><?= $row->nama_kosan ?></td>
          <td><?= $row->cp ?></td>
          <td>
            <a href="<?= base_url('Admin/delete_user/'.$row->id_user) ?>" class="btn btn-danger btn-sm">Batalkan Pembeli</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>

  </table>
</div>
