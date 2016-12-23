<h3><?php echo $judul; ?></h3>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<hr>
<table class="table table-bordered">
    <tr class="success"><th>Form</th></tr>
    <tr><td>
            <div class="col-sm-6"">
                <?php echo form_input('kd_buku',$product['kd_buku'], array('placeholder'=>'kd_buku','class' => 'form-control')) ;?>
            </div>
<div class="col-sm-1"">
                <?php echo form_input('jumlah_beli','', array('placeholder'=>'QTY','class' => 'form-control')) ;?>
            </div>
</td></tr>
    <tr><td>
            <button type="submit" name="submit" class="btn btn-default">Simpan</button>
            <?php echo anchor('transaksi/selesai_belanja','Selesai',array('class'=>'btn btn-default'))?>
        </td></tr>
</table>
