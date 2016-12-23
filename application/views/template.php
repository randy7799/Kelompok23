
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>23Book Admin</title>

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker3.css"/>

    <link href="navbar-static-top.css" rel="stylesheet">

    <script src="<?php echo base_url();?>assets/js/ie-emulation-modes-warning.js"></script>

    <script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>

  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">23Book Admin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo anchor('buku','Data Buku');?></li>
            <li><?php echo anchor('transaksi','Data Transaksi');?></li>
            <li><?php echo anchor('pelanggan','Data Pelanggan');?></li>
            <li><?php echo anchor('bayar','Data Pembayaran');?></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="acttive"><?php echo anchor('auth/logout','Logout');?></li></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">

        <?php echo $contents;?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tanggal').datepicker({
            format: "dd-mm-yyyy",
            autoclose:true
        });
    });
</script>
  </body>
</html>
