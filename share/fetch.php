<?php
include('db.php');
$id_rental=$_GET['id_rental'];
 if(isset($_POST['view'])){


 if($_POST["view"] != '')
 {
    $update_query = "UPDATE pesan left join mobil on mobil.no_pol=pesan.no_pol LEFT JOIN rental on mobil.id_rental=rental.id_rental SET pesan.read = '1' WHERE pesan.read='0' and rental.id_rental='$id_rental'";
    mysqli_query($con, $update_query);
}
$query = "select  * from  pesan left join mobil on mobil.no_pol=pesan.no_pol LEFT JOIN rental on mobil.id_rental=rental.id_rental  WHERE rental.id_rental='$id_rental' ORDER BY pesan.tanggal_pesan DESC LIMIT 5";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <li>
    <a href="invoice_admin.php?id='.$row["invoice"].' ">
   <div class="alert alert-info" role="alert">
                <strong>Warning!</strong> Pemesanan '.$row["no_pol"].' Pada Tanggal'.$row["tanggal_mulai"].' s/d '.$row["tanggal_selesai"].'.
  </div>
   </a>
  </li>

   ';

 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}



$status_query = "select  * from  pesan left join mobil on mobil.no_pol=pesan.no_pol LEFT JOIN rental on mobil.id_rental=rental.id_rental  WHERE rental.id_rental='$id_rental' and pesan.read='0'";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
  'notification' => $output,
  'unseen_notification'  => $count
);

echo json_encode($data);

}

?>
