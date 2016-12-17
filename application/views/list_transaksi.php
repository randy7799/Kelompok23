<?php echo $judul; ?>
<?php echo anchor('transaksi/input',' INPUT DATA TRANSAKSI');?>
<hr>
<table border="1">
<tr><th>No Faktur</th><th>Tanggal</th><th>Kode Pelanggan</th><th>Id User</th><th>Biaya Kirim</th><th>Total Bayar</th><th colspan="2"></th></tr>

<?php
foreach ($transaksi as $t){
	echo "<tr>
	<td>$t->no_faktur</td>
	<td>$t->tgl_faktur</td>
	<td>$t->kd_pelanggan</td>
	<td>$t->id_user</td>
	<td>$t->biaya_kirim</td>
	<td>$t->total_bayar</td>
	<td>".anchor('transaksi/edit/'.$t->no_faktur,'EDIT')."</td>
	<td>".anchor('transaksi/delete/'.$t->no_faktur,'DELETE')."</td>
	</tr>";
}
?>
</table>