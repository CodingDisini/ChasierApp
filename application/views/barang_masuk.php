
<div class="box box-widget">
	<div class="box box-body">
		<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Tanggal</th>

		</tr>
	</thead>
	<tbody>
		<?php
$no = 1;
	foreach ($row as $i) {		

?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $i->nama_barang ?></td>
			<td><?php echo $i->stok ?></td>
			<td><?php echo $i->tglup ?></td>
		</tr>
	</tbody>
<?php } ?>
</table>
	</div>
</div>



