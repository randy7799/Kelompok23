<?php echo $judul; ?>
<?php echo anchor('buku/input',' INPUT DATA BUKU');?>
<hr>
<table class="table table-bordered">
<tr><th>Kode Buku</th><th>Judul</th><th> Jenis</th><th>Karangan</th><th>Terbitan</th><th>Tahun Terbit</th><th>Harga</th><th>Stok</th><th>Foto</th><th colspan="2"></th></tr>

<?php
foreach ($buku as $b){
	echo "<tr>
	<td>$b->kd_buku</td>
	<td>$b->judul_buku</td>
	<td>$b->jenis_buku</td>
	<td>$b->karang_buku</td>
	<td>$b->terbit_buku</td>
	<td>$b->tahun_buku</td>
	<td>$b->harga_buku</td>
	<td>$b->stok_buku</td>
	<td>$b->foto</td>
	<td>".anchor('buku/edit/'.$b->kd_buku,'EDIT')."</td>
	<td>".anchor('buku/delete/'.$b->kd_buku,'DELETE')."</td>
	</tr>";
}
?>
</table>
