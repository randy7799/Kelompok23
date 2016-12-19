<?php echo form_open('buku/input_simpan'); ?>

<table class="table table-border">
<tr>
<td>Kode Buku</td> <td><?php echo form_input('kd_buku','', array('placeholder'=>'kd_buku')) ;?></td>
</tr>

<tr>
<td>Judul Buku</td> <td><?php echo form_input('judul_buku','', array('placeholder'=>'judul_buku')) ;?></td>
</tr>

<tr>
<td>Jenis Buku</td> <td><?php echo form_input('jenis_buku','', array('placeholder'=>'jenis_buku')) ;?></td>
</tr>

<tr>
<td>Karangan</td> <td><?php echo form_input('karang_buku','', array('placeholder'=>'karang_buku')) ;?></td>
</tr>

<tr>
<td>Terbitan</td> <td><?php echo form_input('terbit_buku','', array('placeholder'=>'terbit_buku')) ;?></td>
</tr>

<tr>
<td>Tahun Terbit</td> <td><?php echo form_input('tahun_buku','', array('placeholder'=>'tahun_buku')) ;?></td>
</tr>

<tr>
<td>Harga Buku</td> <td><?php echo form_input('harga_buku','', array('placeholder'=>'harga_buku')) ;?></td>
</tr>

<tr>
<td>Stok Buku</td> <td><?php echo form_input('stok_buku','', array('placeholder'=>'stok_buku')) ;?></td>
</tr>

<tr>
<td>Foto</td><td> <?php echo form_input('foto','', array('placeholder'=>'foto')) ;?> </td>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('buku', 'KEMBALI'); ?>
</td></tr>


</table>

<?php echo form_close();?>
