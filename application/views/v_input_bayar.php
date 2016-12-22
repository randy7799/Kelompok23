<?php echo form_open('bayar/input_simpan'); ?>
<table class="table table-bordered">
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur','', array('placeholder'=>'no_faktur','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Uang Bayar</td> <td><?php echo form_input('uang_bayar','', array('placeholder'=>'uang_bayar','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Uang Kembali</td> <td><?php echo form_input('uang_kembali','', array('placeholder'=>'uang_kembali','class' => 'form-control')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA','class="btn btn-primary"');?>
<?php echo anchor('bayar', 'KEMBALI',array('class' =>'btn btn-primary' )); ?>
</td></tr>


</table>

<?php echo form_close();?>
