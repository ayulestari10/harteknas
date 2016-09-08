<div class="container">
  <h1>DAFTAR BOOKING</h1>
  <div class="">
    <a href="list_pemilik.php" class="btn btn-warning btn-sm">List Pemilik</a>
    <a href="list_pembeli.php" class="btn btn-info btn-sm">List Pembeli</a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>Kosan</th>
        <th>Bukti pembayaran</th>
      </tr>
    </thead>
    <?php $a=1; while ($a <= 10){ ?>
      <tbody>
        <tr>
          <td><?= $a ?></td>
          <td>melati</td>
          <td>
            <a href="konfirmasi_booking.php" class="btn btn-success btn-sm">Konfirmasi</a>
            <a href="batalkan_booking.php" class="btn btn-danger btn-sm">Batalkan</a>
          </td>
        </tr>
      </tbody>
    <?php $a++; } ?>

  </table>
</div>
