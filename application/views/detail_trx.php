<h4>Laporan Transaksi</h4>
<p><strong>Nomor:</strong> <?=$nota;?> | <strong>Kasir:</strong> <?=$kasir;?> | <strong>Tanggal:</strong> <?=$this->fungsi->tanggalindo($tanggal);?> <?=$jam;?></p>
<table class="table table-bordered table-striped" id="example2">
    <thead>
      <tr>
          <th align="center"><strong>#</strong></th>
          <th><strong>KODE BARANG</strong></th>
          <th><strong>NAMA BARANG</strong></th>
          <th align="center" ><strong>JUMLAH</strong></th>
          <th align="right" ><strong>HARGA BARANG</strong></th>
          <th align="right" ><strong>SUB TOTAL</strong></th>
      </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($result as $items) { ?>
        <tr>
            <td align="center"><?=$no++;?></td>
            <td><?=$items->kode_barang;?></td>
            <td><?=$items->nama_barang;?></td>
            <td align="center"><?=$items->jml_jual;?></td>
            <td align="right">Rp <?=$this->fungsi->rupiah($items->harga_jual);?></td>
            <td align="right">Rp <?=$this->fungsi->rupiah($items->sub_total);?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="4"></td>
            <td align="right" colspan="2"><font size="5">Rp <?=$this->fungsi->rupiah($grand_total);?></font></td>
        </tr>
        <tr >
            <td colspan="4">&nbsp;</td>
            <td><strong>POTONGAN</strong></td>
            
            <td align="right">Rp <?=$this->fungsi->rupiah($diskon);?> - Rp <?=$this->fungsi->rupiah($grand_total);?></td>
        </tr>
        <tr >
            <td colspan="4">&nbsp;</td>
            <td><strong>TOTAL</strong></td>
            <td align="right">Rp <?=$this->fungsi->rupiah($total);?></td>
        </tr>
        <tr >
            <td colspan="4">&nbsp;</td>
            <td><strong>BAYAR</strong></td>
            <td align="right">Rp <?=$this->fungsi->rupiah($bayar);?></td>
        </tr>
        <tr >
            <td colspan="4">&nbsp;</td>
            <td><strong>KEMBALI</strong></td>
            <td align="right">Rp <?=$this->fungsi->rupiah($kembalian);?></td>
        </tr>
        <tr class="table-secondary">
            <td colspan="6" align="right"><?=$keterangan;?></td>
        </tr>
    </tbody>
</table>