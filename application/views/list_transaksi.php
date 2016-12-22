<h3>
	<?php echo $judul; ?>
</h3>
<?php echo anchor('transaksi/input',' INPUT DATA TRANSAKSI',array('class'=>'btn btn-danger btn-sm'));?>
<hr>
<table class="table table-bordered">
<tr><th>No</th><th>No Faktur</th><th>Tanggal</th><th>Kode Pelanggan</th><th>Id User</th><th>Kode Buku</th><th>jumlah beli</th><th>Biaya Kirim</th><th>Total Bayar</th><th colspan="2"></th></tr>

<?php
$no=1;
foreach ($transaksi as $t){
	echo "<tr>
	<td width='10'>$no</td>
	<td>$t->no_faktur</td>
	<td>$t->tgl_faktur</td>
	<td>$t->kd_pelanggan</td>
	<td>$t->id_user</td>
	<td>$t->kd_buku</td>
	<td>$t->jumlah_beli</td>
	<td>$t->biaya_kirim</td>
	<td>$t->total_bayar</td>
	<td>".anchor('transaksi/edit/'.$t->no_faktur,'EDIT')."</td>
	<td>".anchor('transaksi/delete/'.$t->no_faktur,'DELETE')."</td>
	</tr>";
	$no++;
}
?>
</table>
