<?php echo form_open('detail/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table>
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur',$product['no_faktur'], array('placeholder'=>'no_faktur')) ;?></td>
</tr>

<tr>
<td>Kode Buku</td> <td><?php echo form_input('kd_buku',$product['kd_buku'], array('placeholder'=>'kd_buku')) ;?></td>
</tr>

<tr>
<td>Jumlah Beli</td> <td><?php echo form_input('jumlah_beli',$product['jumlah_beli'], array('placeholder'=>'jumlah_beli')) ;?></td>
</tr>

<tr>
<td>Total Harga</td> <td><?php echo form_input('total_harga',$product['total_harga'], array('placeholder'=>'total_harga')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('detail', 'KEMBALI'); ?>
</td></tr>


</table>

<?php echo form_close();?>