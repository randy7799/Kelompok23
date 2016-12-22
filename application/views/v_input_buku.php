<h3><?php echo $judul; ?></h3>
<h3><?php echo $judul; ?></h3>
<?php echo form_open('buku/input_simpan'); ?>

<table class="table table-bordered">
<tr>
<td>Kode Buku</td> <td><?php echo form_input('kd_buku','', array('placeholder'=>'kd_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Judul Buku</td> <td><?php echo form_input('judul_buku','', array('placeholder'=>'judul_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Jenis Buku</td> <td><?php echo form_input('jenis_buku','', array('placeholder'=>'jenis_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Karangan</td> <td><?php echo form_input('karang_buku','', array('placeholder'=>'karang_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Terbitan</td> <td><?php echo form_input('terbit_buku','', array('placeholder'=>'terbit_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Tahun Terbit</td> <td><?php echo form_input('tahun_buku','', array('placeholder'=>'tahun_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Harga Buku</td> <td><?php echo form_input('harga_buku','', array('placeholder'=>'harga_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Stok Buku</td> <td><?php echo form_input('stok_buku','', array('placeholder'=>'stok_buku','class' => 'form-control')) ;?></td>
</tr>

<tr>
<td>Foto</td><td> <?php echo form_input('foto','', array('placeholder'=>'foto','class' => 'form-control')) ;?> </td>
</tr>
<tr><td colspan='2'>
<?php echo form_submit('submit','SIMPAN DATA','class="btn btn-primary"');?>
<?php echo anchor('buku', 'KEMBALI',array('class' =>'btn btn-primary' )); ?>
</td></tr>

</table>

<?php echo form_close();?>
