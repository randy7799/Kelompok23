<h3><?php echo $judul; ?></h3>
<hr>
<table>
	<th><?php echo form_input('search','', array('placeholder'=>'search','class' => 'form-control'))?></th><th><?php echo form_submit('submit','cari','class="btn btn-primary"');?></th>
</table>
<table class="table table-bordered">
<tr><th>No</th><th>Kode Buku</th><th>Judul</th><th> Jenis</th><th>Karangan</th><th>Terbitan</th><th>Tahun Terbit</th><th>Harga</th><th>Stok</th><th>Foto</th><th colspan="2"></th></tr>
<?php
$no=1;
foreach ($ubuku as $b){
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
	<td>".anchor($b->search,img('assets/img/gs.png'))."</td>
	<td>".anchor('upembelian/index/'.$b->kd_buku,'Beli')."</td>
	</tr>";
	$no++;
}
?>
</table>
