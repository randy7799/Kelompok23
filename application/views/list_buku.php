<h3><?php echo $judul; ?></h3>
<?php echo anchor('buku/input',' INPUT DATA BUKU',array('class'=>'btn btn-danger btn-sm'));?>
<hr>
<table class="table table-bordered">
<tr><th>No</th><th>Kode Buku</th><th>Judul</th><th> Jenis</th><th>Karangan</th><th>Terbitan</th><th>Tahun Terbit</th><th>Harga</th><th>Stok</th><th>search</th><th colspan="2"></th></tr>

<?php
$no=1;
foreach ($buku as $b){
	echo "<tr>
	<td width='10'>$no</td>
	<td>$b->kd_buku</td>
	<td>$b->judul_buku</td>
	<td>$b->jenis_buku</td>
	<td>$b->karang_buku</td>
	<td>$b->terbit_buku</td>
	<td>$b->tahun_buku</td>
	<td>$b->harga_buku</td>
	<td>$b->stok_buku</td>
	<td>$b->search</td>
	<td>".anchor('buku/edit/'.$b->kd_buku,'EDIT')."</td>
	<td>".anchor('buku/delete/'.$b->kd_buku,'DELETE')."</td>
	</tr>";
	$no++;
}
?>
</table>
