<?php
// http://phpbego.wordpress.com
 require "../share/db.php";
 session_start();

 $id=$_GET['id'];
 $query = mysqli_query($con,"SELECT *, costumer.alamat as alamat_c , rental.alamat as alamat_r  from pesan left JOIN mobil on pesan.no_pol=mobil.no_pol left join costumer on costumer.id_costumer=pesan.id_costumer left JOIN rental on rental.id_rental=mobil.id_rental WHERE pesan.invoice='$id' ");
 while($data = mysqli_fetch_array($query)){
  $date1=date_create($data['tanggal_selesai']);
  $date2=date_create($data['tanggal_mulai']);
  $perbedaan=date_diff($date2,$date1);

 $strhtml .='
 <html>
 <body>
   <div class="container">
   <div class="row">
       <div class="">
       <div class="invoice-title">
         <center><h2>Invoice</h2></center>
         <h3 class="pull-right">Order # '.$data['invoice'].'</h3>
       </div>
       <hr>
       <div class="row">
         <div class="col-xs-5">
           <address>
           <strong>Penagihan To:</strong><br>
             '. $data['nama'].'<br>
             '. $data['no_hp'].'<br>
             '. $data['alamat_c'].'<br>
           </address>
         </div>
         <div class="col-xs-6 text-right">
           <address>
             <strong>Rental:</strong><br>
             '. $data['nama_rental'].'<br>
             '. $data['alamat_r'].'<br>
             '. $data['no_hp_rental'].'<br>

           </address>
         </div>
       </div>
       <div class="row">
         <div class="col-xs-5">
           <address>
             <strong>Metode Pembayaran:</strong><br>
             Transfer Ke <br>
             Bank '. $data['bank'].' - '. $data['rekening'].'<br>
             An. '. $data['pemilik_rekening'].'
           </address>
         </div>
         <div class="col-xs-6 text-right">
           <address>
             <strong>Tanggal Order:</strong><br>
           '. $data['tanggal_pesan'].'<br><br>
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
                     <td class="panel-heading"><strong>Mobil</strong></td>
                     <td class="text-center panel-heading"><strong>Harga /Hari</strong></td>
                     <td class="text-center panel-heading"><strong>Tanggal Mulai</strong></td>
                     <td class="text-center panel-heading"><strong>Tanggal Selesai</strong></td>
                     <td class="text-center panel-heading"><strong>Jumlah Hari</strong></td>
                     <td class="text-right panel-heading"><strong>Total</strong></td>
                  </tr>
               </thead>
               <tbody>

                 <tr>
                   <td class="text-left"> '. $data['no_pol'].'</td>
                   <td class="text-center"> '. $data['harga'].'</td>
                   <td class="text-center">'. $data['tanggal_mulai'].'</td>
                   <td class="text-center">'. $data['tanggal_selesai'].'</td>
                   <td class="text-center ">'.$perbedaan=$perbedaan->format("%R%a")
                                           .'</td>
                   <td class="text-right">Rp.'.($data['harga']*$perbedaan) .'</td>

                 </tr>

                 <tr>
                   <td class="thick-line"></td>
                   <td class="thick-line"></td>
                   <td class="thick-line"></td>
                   <td class="thick-line"></td>
                   <td class="thick-line text-left"><hr><strong>Subtotal</strong></td>
                   <td class="thick-line text-right"><hr>Rp.'. ($data['harga']*$perbedaan) .'</td>
                 </tr>
                 <tr>
                   <td class="no-line"></td>
                   <td class="no-line"></td>
                   <td class="no-line"></td>
                   <td class="no-line"></td>
                   <td class="no-line text-left"><strong>Biaya Lainnya</strong></td>
                   <td class="no-line text-right">Rp.0</td>
                 </tr>
                 <tr>
                   <td class="no-line"></td>
                   <td class="no-line"></td>
                   <td class="no-line"></td>
                   <td class="no-line"></td>
                   <td class="no-line text-left"><strong>Total</strong></td>
                   <td class="no-line text-right">Rp.'. ($data['harga']*$perbedaan) .'</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

          ';
  }

        $strhtml .="<pagebreak />";
        $id2=$_GET['id2'];
        $query2 = mysqli_query($con,"select * from costumer where id_costumer='$id2' ");
        while($data2 = mysqli_fetch_array($query2)){

        $strhtml .="<img src='../penyewa/".$data2['foto_ktp']."' width='70%'><br><br>";
        $strhtml .="<img src='../penyewa/".$data2['foto_ktp_orang']."' width='70%'>";
        }
        		$now = date("F j, Y, g:i a");
        		$strhtml .= "<br><br><p>Dicetak Pada : $now <p>";
        		$strhtml .= " </body>
             </html>";

        // Panggil mPdf
require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('bootstrap.min.css');
$fileName = 'reportPdf--' . date('d-m-Y') . '-' . date('h.i.s');

$mpdf = new mPDF('utf-8', 'legal-P', 0, '', 10, 10, 5, 1, 1, 1, '');
$mpdf->WriteHTML(file_get_contents('../invoice_admin.php?id=1'));
//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','I');
