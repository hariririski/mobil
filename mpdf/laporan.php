<?php

 require "../share/db.php";
 session_start(); // Memulai Session
 $dari=$_GET['dari'];
 $sampai=$_GET['sampai'];
 $id=$_SESSION['rental'];
                       $query1 = mysqli_query($con,"select * from rental where username='$id'");
                       while($data1 = mysqli_fetch_array($query1)){
                         $id_rental= $data1['id_rental'];
                       }
 		$strhtml .= '<html>
                 <body>';
 		$strhtml .= '<p align="center"><h2>Laporan Pemesanan Mobil</h2></p><br>';
 		$strhtml .= 'Dari Tanggal '.$dari.' Sampai Dengan '.$sampai.'';
		$strhtml .= '<table >
                              <thead>
                                  <tr>
                                      <th>NO</th>
                                      <th>invoice</th>
                                      <th>Tanggal Order</th>
                                      <th>Tanggal Sewa</th>
                                      <th>Mobil</th>
                                      <th>Status</th>
                                      <th>Nama Penyewa</th>
                                      <th>alamat Penyewa</th>
                                      <th>No Hp Penyewa</th>

                                  </tr>
                              </thead>
                              <tbody>
									';

                                $i=0;

																$query = mysqli_query($con,"select * , costumer.nama as nama_costumer from pesan left join mobil on pesan.no_pol=mobil.no_pol left join rental on rental.id_rental=mobil.id_rental left join costumer on costumer.id_costumer=pesan.id_costumer where rental.id_rental='$id_rental' and pesan.tanggal_mulai BETWEEN '$dari' and '$sampai' or pesan.tanggal_selesai BETWEEN '$dari' and '$sampai'");
                                while($data = mysqli_fetch_array($query)){
                                $i++;

    $strhtml .= "

                                  <tr >
                                      <td>$i</td>
                                      <td>".$data['invoice']."</td>
                                      <td>".$data['tanggal_pesan']."</td>
                                      <td>".$data['tanggal_mulai']." - ".$data['tanggal_selesai']."</td>
                                      <td> ".$data['no_pol']."</td>
                                      <td>";
																			$data1;
																			if($data['verifikasi_pembayaran']==0){$data1='Belum Melakukan Pembayaran';}
																			else if($data['verifikasi_pembayaran']==1){$data1='Pembayaran Belum Di Verifikasi';}
																			else if($data['verifikasi_pembayaran']==2){$data1='Pembayaran Berhasil';}
																			else if($data['verifikasi_pembayaran']==3){$data1='Pembayaran Gagal';}
  																		$strhtml .="$data1";
  																		$strhtml .="</td>";

    $strhtml .= "<td>".$data['nama']."</td>";
    $strhtml .= "<td>".$data['alamat']."</td>";
    $strhtml .= "<td>".$data['no_hp']."</td>";
	  $strhtml .="</tr>";
                                 }
    $strhtml .= '
                              </tbody>
                          </table>
							';

		$now = date("F j, Y, g:i a");
		$strhtml .= "<p>Dicetak Pada : $now <p>";
    $strhtml .= '<body>
                <html>';
// Panggil mPdf
require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/style.css');
$fileName = 'reportPdf--' . date('d-m-Y') . '-' . date('h.i.s');
$mpdf = new mPDF('utf-8', 'legal-L', 0, '', 10, 10, 5, 1, 1, 1, '');
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml,2);
$mpdf->Output();
