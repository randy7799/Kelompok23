<?php echo $judul; ?>
<?php echo anchor('detail/input',' INPUT DATA DETAIL');?>
<hr>
<table border="1">
<tr><th>No Faktur</th><th>Kode Buku</th><th> Jumlah Beli</th><th>Total Harga</th><th colspan="2"></th></tr>

<?php
foreach ($detail as $b){
	echo "<tr>
	<td>$b->no_faktur</td>
	<td>$b->kd_buku</td>
	<td>$b->jumlah_beli</td>
	<td>$b->total_harga</td>
	<td>".anchor('detail/edit/'.$b->no_faktur,'EDIT')."</td>
	<td>".anchor('detail/delete/'.$b->no_faktur,'DELETE')."</td>
	</tr>";
}
?>
</table>