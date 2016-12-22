<h3><?php echo $judul; ?></h3>
<?php echo form_open('detail/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table class="table table-bordered">
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur',$product['no_faktur'], array('placeholder'=>'no_faktur','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Total Harga</td> <td><?php echo form_input('total_harga',$product['total_harga'], array('placeholder'=>'total_harga','class' => 'form-control')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA','class="btn btn-primary"');?>
<?php echo anchor('detail', 'KEMBALI',array('class' =>'btn btn-primary' )); ?>
</td></tr>


</table>

<?php echo form_close();?>
