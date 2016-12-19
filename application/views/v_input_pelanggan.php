<?php echo form_open('pelanggan/input_simpan'); ?>
<table class="table table-border">
<tr>
<td>Kode Pelanggan</td> <td><?php echo form_input('kd_pelanggan','', array('placeholder'=>'kd_pelanggan')) ;?></td>
</tr>

<tr>
<td>Nama Pelanggan</td> <td><?php echo form_input('nama_pelanggan','', array('placeholder'=>'nama_pelanggan')) ;?></td>
</tr>

<tr>
<td>Alamat Pelanggan</td> <td><?php echo form_input('alamat_pelanggan','', array('placeholder'=>'alamat_pelanggan')) ;?></td>
</tr>

<tr>
<td>Telpon Pelanggan</td> <td><?php echo form_input('telpon_pelanggan','', array('placeholder'=>'telpon_pelanggan')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('pelanggan', 'KEMBALI'); ?>
</td></tr>


</table>

<?php echo form_close();?>
