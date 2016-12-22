<h3><?php echo $judul; ?></h3>
<?php echo form_open('pelanggan/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table class="table table-bordered">
<tr>
<td>Kode Pelanggan</td> <td><?php echo form_input('kd_pelanggan',$product['kd_pelanggan'], array('placeholder'=>'kd_pelanggan','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Nama Pelanggan</td> <td><?php echo form_input('nama_pelanggan',$product['nama_pelanggan'], array('placeholder'=>'nama_pelanggan','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Alamat Pelanggan</td> <td><?php echo form_input('alamat_pelanggan',$product['alamat_pelanggan'], array('placeholder'=>'alamat_pelanggan','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Telpon Pelanggan</td> <td><?php echo form_input('telpon_pelanggan',$product['telpon_pelanggan'], array('placeholder'=>'telpon_pelanggan','class' => 'form-control')) ;?></td>
</tr>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA','class="btn btn-primary"');?>
<?php echo anchor('pelanggan', 'KEMBALI',array('class' =>'btn btn-primary' )); ?>
</td></tr>


</table>

<?php echo form_close();?>
