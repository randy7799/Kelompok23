<h3><?php echo $judul; ?></h3>
<?php echo form_open('detail/input_simpan'); ?>
<table class="table table-bordered">
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur','', array('placeholder'=>'no_faktur','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Kode Buku</td> <td><?php echo form_input('kd_buku','', array('placeholder'=>'kd_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Jumlah Beli</td> <td><?php echo form_input('jumlah_beli','', array('placeholder'=>'jumlah_beli','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Total Harga</td> <td><?php echo form_input('total_harga','', array('placeholder'=>'total_harga','class' => 'form-control')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('detail', 'KEMBALI',array('class' =>'btn btn-primary' )); ?>
</td></tr>


</table>

<?php echo form_close();?>
