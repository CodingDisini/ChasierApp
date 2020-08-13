
<h4><strong>Tambah Kategori</strong></h4>

<div class="box box-info">
    <div class="box box-widget">
        <div class="box-body">
        	<?php if ($this->session->flashdata('message')) { ?>
<div class="alert alert-dismissible alert-light">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
</div>
<?php } ?>
<form action="<?php if (!empty($id_kategori) && !empty($kat)) { echo base_url('updatecat'); } else {	echo base_url('inputcat'); } ?>" method="POST">
	<?php if (!empty($id_kategori)) { ?>
		<input hidden="" type="number" class="form-control" name="id_kategori" id="id_kategori" value="<?=$id_kategori;?>" required="">
	<?php } ?>
	<div class="form-group">
		<label class="col-form-label" for="kategori">Nama Kategori</label>
		<input type="text" class="form-control" name="kategori" id="kategori" <?php if (!empty($kat)) { echo 'value="'.$kat.'"'; } ?> required="">
	</div>
	<button type="submit" class="btn btn-primary btn-flat">Simpan</button>
</form>
<br />
<h4><strong>Tabel Kategori</strong></h4>
<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th scope="col"><strong>#</strong></th>
			<th scope="col"><strong>Kategori</strong></th>
			<th scope="col"><strong>Kode</strong></th>
			<th align="center" scope="col"><strong>Tipe</strong></th>
			<th align="center" scope="col"><strong>Aksi</strong></th
		</tr>
	</thead>
	<tbody>
	<?php if ($kategori) { $no=1; foreach ($kategori as $r) { ?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$r->kategori;?></td>
			<td><?=$r->kode_kategori;?></td>
			<td align="center"><?=$this->fungsi->barang_di_kategori($r->id_kategori);?></td>
			<td align="center">
				<?php if ($this->fungsi->barang_di_kategori($r->id_kategori) == 0) { ?>
				<a href="<?=base_url('editcat/'.$r->id_kategori);?>" title="Edit"><i class="fa fa-pencil-square-o"></i></a> &nbsp;
				<a href="<?=base_url('delcat/'.$r->id_kategori);?>" title="Hapus"><i class="fa fa-trash-o"></i></a>
				<?php } else { ?>
				<span class="label label-danger">Disabled</span>
				<?php } ?>
			</td>
		</tr>
	<?php } } else { ?>
		<tr>
			<td colspan="5" align="center">Tidak ditemukan</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<?=$halaman;?>
        </div>
    </div>
</div>        
