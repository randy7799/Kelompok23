<?php echo form_open('detail/input_simpan'); ?>
<table>
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur','', array('placeholder'=>'no_faktur')) ;?></td>
</tr>

<tr>
<td>Kode Buku</td> <td><?php echo form_input('kd_buku','', array('placeholder'=>'kd_buku')) ;?></td>
</tr>

<tr>
<td>Jumlah Beli</td> <td><?php echo form_input('jumlah_beli','', array('placeholder'=>'jumlah_beli')) ;?></td>
</tr>

<tr>
<td>Total Harga</td> <td><?php echo form_input('total_harga','', array('placeholder'=>'total_harga')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('detail', 'KEMBALI'); ?>
</td></tr>


</table>

<?php echo form_close();?>