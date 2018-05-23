<?php
// http://phpbego.wordpress.com
 require "../share/db.php";
 session_start(); // Memulai Session
 $id=$_SESSION['rental'];
                       $query1 = mysqli_query($con,"select * from rental where username='$id'");
                       while($data1 = mysqli_fetch_array($query1)){
                         $id_rental= $data1['id_rental'];
                       }
 		$strhtml .= "<h3>Laporan Aset</h3>";
		$strhtml .= '<table border="0" width="100%" c>
                              <thead>
                                  <tr>
                                      <th>NO</th>
                                      <th>invoice</th>
                                      <th>Tanggal Order</th>
                                      <th>Tanggal Sewa</th>
                                      <th>Mobil</th>
                                      <th>Status</th>

                                  </tr>
                              </thead>
                              <tbody>
									';

                                $i=0;

																$query = mysqli_query($con,"select * from pesan left join mobil on pesan.no_pol=mobil.no_pol left join rental on rental.id_rental=mobil.id_rental where rental.id_rental='$id_rental' ");
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
																			$data;
																			if($data['verifikasi_pembayaran']==0){$data='Belum Melakukan Pembayaran';}
																			else if($data['verifikasi_pembayaran']==1){$data='Pembayaran Belum Di Verifikasi';}
																			else if($data['verifikasi_pembayaran']==2){$data='Pembayaran Berhasil';}
																			else if($data['verifikasi_pembayaran']==3){$data='Pembayaran Gagal';}
  																		$strhtml .="$data";


                                 }
    $strhtml .= '</td>


		</tr>
                              </tbody>
                          </table>
							';

		$now = date("F j, Y, g:i a");
		$strhtml .= "<p>Dicetak Pada : $now <p>";

// Panggil mPdf
require ("mpdf/mpdf.php");

$stylesheet = file_get_contents('css/style.css');
$fileName = 'reportPdf--' . date('d-m-Y') . '-' . date('h.i.s');

$mpdf = new mPDF('utf-8', 'legal-L', 0, '', 10, 10, 5, 1, 1, 1, '');

//$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','I');
