<?php echo $judul; ?>
<?php echo anchor('bayar/input',' INPUT DATA BAYAR');?>
<hr>
<table border="1">
<tr><th>No Faktur</th><th>Uang Bayar</th><th> Uang Kembali</th><th colspan="2"></th></tr>

<?php
foreach ($bayar as $by){
	echo "<tr>
	<td>$by->no_faktur</td>
	<td>$by->uang_bayar</td>
	<td>$by->uang_kembali</td>
	<td>".anchor('bayar/edit/'.$by->no_faktur,'EDIT')."</td>
	<td>".anchor('bayar/delete/'.$by->no_faktur,'DELETE')."</td>
	</tr>";
}
?>
</table>