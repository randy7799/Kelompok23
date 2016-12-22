<h3>
	<?php echo $judul; ?>
</h3>
<?php echo anchor('pelanggan/input',' INPUT DATA PElANGGAN',array('class'=>'btn btn-danger btn-sm'));?>
<hr>
<table class="table table-bordered">
<tr><th>No</th><th>Kode Pelanggan</th><th>Nama Pelanggan</th><th> Alamat Pelanggan</th><th>Telpon Pelanggan</th><th colspan="2"></th></tr>

<?php
$no=1;
foreach ($pelanggan as $p){
	echo "<tr>
	<td width='10'>$no</td>
	<td>$p->kd_pelanggan</td>
	<td>$p->nama_pelanggan</td>
	<td>$p->alamat_pelanggan</td>
	<td>$p->telpon_pelanggan</td>
	<td>".anchor('pelanggan/edit/'.$p->kd_pelanggan,'EDIT')."</td>
	<td>".anchor('pelanggan/delete/'.$p->kd_pelanggan,'DELETE')."</td>
	</tr>";
	$no++;
}
?>
</table>
