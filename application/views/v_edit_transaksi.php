<?php echo form_open('transaksi/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table class="table table-border">
<tr>
<tr>
<td>No Faktur</td> <td><?php echo form_input('no_faktur',$product['no_faktur'], array('placeholder'=>'no_faktur')) ;?></td>
</tr>

<tr>
<td>Tanggal</td> <td><?php echo form_input('tgl_faktur',$product['tgl_faktur'], array('placeholder'=>'tgl_faktur')) ;?></td>
</tr>

<tr>
<td>Kode Pelanggan</td> <td><?php echo form_input('kd_pelanggan',$product['kd_pelanggan'], array('placeholder'=>'kd_pelanggan')) ;?></td>
</tr>

<tr>
<td>Id User</td> <td><?php echo form_input('id_user',$product['id_user'], array('placeholder'=>'id_user')) ;?></td>
</tr>

<tr>
<td>Biaya Kirim</td> <td><?php echo form_input('biaya_kirim',$product['biaya_kirim'], array('placeholder'=>'biaya_kirim')) ;?></td>
</tr>

<tr>
<td>Total Bayar</td> <td><?php echo form_input('total_bayar',$product['total_bayar'], array('placeholder'=>'total_bayar')) ;?></td>
</tr>

<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA');?>
<?php echo anchor('transaksi', 'KEMBALI'); ?>
</td></tr>


</table>

<?php echo form_close();?>
