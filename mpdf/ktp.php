<?php
// http://phpbego.wordpress.com
 require "../share/db.php";
 require ("mpdf/mpdf.php");
 session_start(); // Memulai Session
//  $id=$_GET['id'];
// $query = mysqli_query($con,"select * from costumer where id.costumer='$id' ");
// while($data = mysqli_fetch_array($query)){
// $i++;
// $strhtml .="<img src='".$data['foto_ktp']."'>";
// }
// 		$now = date("F j, Y, g:i a");
// 		$strhtml .= "<p>Dicetak Pada : $now <p>";
//
// // Panggil mPdf


$fileName = 'reportPdf--' . date('d-m-Y') . '-' . date('h.i.s');

$mpdf = new mPDF('utf-8', 'legal-L', 0, '', 10, 10, 5, 1, 1, 1, '');
$mpdf->WriteHTML(file_get_contents('../frame.html?id=1'));
$mpdf->WriteHTML($strhtml);
$mpdf->Output('files/' . $fileName. '.pdf','I');
