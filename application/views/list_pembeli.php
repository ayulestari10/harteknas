<div class="container">
  <h1>DAFTAR PEMBELI KOSAN</h1>
  <div class="">
    <a href="" class="btn btn-warning btn-sm">List Pemilik</a>
    <a href="" class="btn btn-info btn-sm">List Booking</a>
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
    <?php $a=1; while ($a <= 10){ ?>
      <tbody>
        <tr>
          <td><?= $a ?></td>
          <td>Nusril</td>
          <td>Prabumulih</td>
          <td>Melati</td>
          <td>085267352846</td>
          <td>
            <a href="" class="btn btn-danger btn-sm">Batalkan Pembeli</a>
          </td>
        </tr>
      </tbody>
    <?php $a++; } ?>

  </table>
</div>
