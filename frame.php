<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>

    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->




</head>
<!-- BEGIN HEAD -->
<body >

<?php $id=$_GET['id'];
include 'share/db.php';
$query = mysqli_query($con,"SELECT *, costumer.alamat as alamat_c , rental.alamat as alamat_r  from pesan left JOIN mobil on pesan.no_pol=mobil.no_pol left join costumer on costumer.id_costumer=pesan.id_costumer left JOIN rental on rental.id_rental=mobil.id_rental WHERE pesan.invoice='$id' ");
while($data = mysqli_fetch_array($query)){


?>


  <div class="container">
  <div class="row">
      <div class="col-xs-12">
      <div class="invoice-title">
        <h2>Invoice</h2><h3 class="pull-right">Order # <?php echo $data['invoice']?></h3>
      </div>
      <hr>
      <div class="row">
        <div class="col-xs-6">
          <address>
          <strong>Penagihan To:</strong><br>
            <?php echo $data['nama']?><br>
            <?php echo $data['no_hp']?><br>
            <?php echo $data['alamat_c']?><br>
          </address>
        </div>
        <div class="col-xs-6 text-right">
          <address>
            <strong>Rental:</strong><br>
            <?php echo $data['nama_rental']?><br>
            <?php echo $data['alamat_r']?><br>
            <?php echo $data['no_hp_rental']?><br>

          </address>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <address>
            <strong>Metode Pembayaran:</strong><br>
            Transfer Ke <br>
            Bank <?php echo $data['bank']?> - <?php echo $data['rekening']?><br>
            An. <?php echo $data['pemilik_rekening']?>
          </address>
        </div>
        <div class="col-xs-6 text-right">
          <address>
            <strong>Tanggal Order:</strong><br>
          <?php echo $data['tanggal_pesan']?><br><br>
          </address>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Rincian Pemesaan</strong></h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-condensed">
              <thead>
                              <tr>
                    <td><strong>Mobil</strong></td>
                    <td class="text-center"><strong>Harga /Hari</strong></td>
                    <td class="text-center"><strong>Tanggal Mulai</strong></td>
                    <td class="text-center"><strong>Tanggal Selesai</strong></td>
                    <td class="text-center"><strong>Jumlah Hari</strong></td>
                    <td class="text-right"><strong>Total</strong></td>
                              </tr>
              </thead>
              <tbody>
                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                <tr>
                  <td class="text-left"> <?php echo $data['no_pol']?></td>
                  <td class="text-center"> <?php echo $data['harga']?></td>
                  <td class="text-center"><?php echo $data['tanggal_mulai']?></td>
                  <td class="text-center"><?php echo $data['tanggal_selesai']?></td>
                  <td class="text-center"><?php $date1=date_create($data['tanggal_selesai']);
                                                $date2=date_create($data['tanggal_mulai']);
                                                $perbedaan=date_diff($date2,$date1);
                                                $perbedaan=$perbedaan->format("%R%a");
                                                $perbedaan++;
                                                echo $perbedaan;
                                          ?></td>
                  <td class="text-right">Rp.<?php echo ($data['harga']*$perbedaan); ?></td>

                </tr>

                <tr>
                  <td class="thick-line"></td>
                  <td class="thick-line"></td>
                  <td class="thick-line"></td>
                  <td class="thick-line"></td>
                  <td class="thick-line text-center"><strong>Subtotal</strong></td>
                  <td class="thick-line text-right">Rp.<?php echo ($data['harga']*$perbedaan); ?></td>
                </tr>
                <tr>
                  <td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line text-center"><strong>Biaya Lainnya</strong></td>
                  <td class="no-line text-right">Rp.0</td>
                </tr>
                <tr>
                  <td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line"></td>
                  <td class="no-line text-center"><strong>Total</strong></td>
                  <td class="no-line text-right">Rp.<?php echo ($data['harga']*$perbedaan); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>


</body>
</html>
