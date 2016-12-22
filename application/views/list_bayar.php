<h3>
	<?php echo $judul; ?>
</h3>
<?php echo anchor('bayar/input',' INPUT DATA BAYAR',array('class'=>'btn btn-danger btn-sm'));?>
<hr>
<table class="table table-bordered">
<tr><th>No</th><th>No Faktur</th><th>Uang Bayar</th><th> Uang Kembali</th><th colspan="2"></th></tr>

<?php
$no=1;
foreach ($bayar as $by){
	echo "<tr>
	<td width='10'>$no</td>
	<td>$by->no_faktur</td>
	<td>$by->uang_bayar</td>
	<td>$by->uang_kembali</td>
	<td>".anchor('bayar/edit/'.$by->no_faktur,'EDIT')."</td>
	<td>".anchor('bayar/delete/'.$by->no_faktur,'DELETE')."</td>
	</tr>";
	$no++;
}
?>
</table>
