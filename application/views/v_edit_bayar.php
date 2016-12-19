<?php echo form_open('bayar/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table class="table table-border">
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur',$product['no_faktur'], array('placeholder'=>'no_faktur')) ;?></td>
</tr>

<tr>
<td>Uang Bayar</td> <td><?php echo form_input('uang_bayar',$product['uang_bayar'], array('placeholder'=>'uang_bayar')) ;?></td>
</tr>

<tr>
<td>Uang Kembali</td> <td><?php echo form_input('uang_kembali',$product['uang_kembali'], array('placeholder'=>'uang_kembali')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('bayar', 'KEMBALI'); ?>
</td></tr>


</table>

<?php echo form_close();?>
