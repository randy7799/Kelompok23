<?php echo $judul; ?>
<?php echo anchor('pelanggan/input',' INPUT DATA PElANGGAN');?>
<hr>
<table class="table table-border">
<tr><th>Kode Pelanggan</th><th>Nama Pelanggan</th><th> Alamat Pelanggan</th><th>Telpon Pelanggan</th><th colspan="2"></th></tr>

<?php
foreach ($pelanggan as $p){
	echo "<tr>
	<td>$p->kd_pelanggan</td>
	<td>$p->nama_pelanggan</td>
	<td>$p->alamat_pelanggan</td>
	<td>$p->telpon_pelanggan</td>
	<td>".anchor('pelanggan/edit/'.$p->kd_pelanggan,'EDIT')."</td>
	<td>".anchor('pelanggan/delete/'.$p->kd_pelanggan,'DELETE')."</td>
	</tr>";
}
?>
</table>
