<?php echo form_open('bayar/input_simpan'); ?>
<table>
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur','', array('placeholder'=>'no_faktur')) ;?></td>
</tr>

<tr>
<td>Uang Bayar</td> <td><?php echo form_input('uang_bayar','', array('placeholder'=>'uang_bayar')) ;?></td>
</tr>

<tr>
<td>Uang Kembali</td> <td><?php echo form_input('uang_kembali','', array('placeholder'=>'uang_kembali')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('bayar', 'KEMBALI'); ?>
</td></tr>


</table>

<?php echo form_close();?>