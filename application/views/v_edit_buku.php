<?php echo form_open('buku/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table>
<tr>
<td>Kode Buku</td> <td><?php echo form_input('kd_buku',$product['kd_buku'], array('placeholder'=>'kd_buku')) ;?></td>
</tr>

<tr>
<td>Judul Buku</td> <td><?php echo form_input('judul_buku',$product['judul_buku'], array('placeholder'=>'judul_buku')) ;?></td>
</tr>

<tr>
<td>Jenis Buku</td> <td><?php echo form_input('jenis_buku',$product['jenis_buku'], array('placeholder'=>'jenis_buku')) ;?></td>
</tr>

<tr>
<td>Karangan</td> <td><?php echo form_input('karang_buku',$product['karang_buku'], array('placeholder'=>'karang_buku')) ;?></td>
</tr>

<tr>
<td>Terbitan</td> <td><?php echo form_input('terbit_buku',$product['terbit_buku'], array('placeholder'=>'terbit_buku')) ;?></td>
</tr>

<tr>
<td>Tahun Terbit</td> <td><?php echo form_input('tahun_buku',$product['tahun_buku'], array('placeholder'=>'tahun_buku')) ;?></td>
</tr>

<tr>
<td>Harga Buku</td> <td><?php echo form_input('harga_buku',$product['harga_buku'], array('placeholder'=>'harga_buku')) ;?></td>
</tr>

<tr>
<td>Stok Buku</td> <td><?php echo form_input('stok_buku',$product['stok_buku'], array('placeholder'=>'stok_buku')) ;?></td>
</tr>

<tr>
<td>Foto</td><td> <?php echo form_input('foto',$product['foto'], array('placeholder'=>'foto')) ;?> </td>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('buku', 'KEMBALI'); ?>
</td></tr>


</table>

<?php echo form_close();?>