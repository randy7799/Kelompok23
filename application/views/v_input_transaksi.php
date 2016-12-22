<?php echo form_open('transaksi/input_simpan'); ?>

<table class="table table-bordered">
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur','', array('placeholder'=>'no_faktur','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Tanggal</td> <td><?php echo form_input('tgl_faktur','', array('placeholder'=>'tgl_faktur','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Kode Pelanggan</td> <td><?php echo form_input('kd_pelanggan','', array('placeholder'=>'kd_pelanggan','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Id User</td> <td><?php echo form_input('id_user','', array('placeholder'=>'id_user','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Kode Buku</td> <td><?php echo form_input('kd_buku','', array('placeholder'=>'kd_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Jumlah Beli</td> <td><?php echo form_input('jumlah_beli','', array('placeholder'=>'jumlah_beli','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Biaya Kirim</td> <td><?php echo form_input('biaya_kirim','', array('placeholder'=>'biaya_kirim','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Total Bayar</td> <td><?php echo form_input('total_bayar','', array('placeholder'=>'total_bayar','class' => 'form-control')) ;?></td>
</tr>

<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA','class="btn btn-primary"');?>
<?php echo anchor('transaksi', 'KEMBALI',array('class' =>'btn btn-primary' )); ?>
</td></tr>


</table>

<?php echo form_close();?>
