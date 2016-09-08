<td>
	<?php if ($row->status == 'not verified'): ?>
		<a class="btn btn-warning" href="<?= base_url('admin/verifikasi/'.$row->id_mhs) ?>"><i class="glyphicon glyphicon-remove"></i> Tidak Terverifikasi</a>
	<?php else: ?>
		<a class="btn btn-success" href="<?= base_url('admin/verifikasi/'.$row->id_mhs) ?>"><i class="glyphicon glyphicon-ok"></i> Terverifikasi</a>
	<?php endif; ?>
</td>
