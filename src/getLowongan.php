<?php
 
ini_set('display_errors',0);
$namaserver = "127.0.0.1";
$username = "root";
$password = "";
$database = "Lowongan";

$koneksi=mysql_connect( "127.0.0.1", "root", "") or die
               (" tdk tersambung ke server".mysql_error() );
$db=mysql_select_db("Lowongan") or die("Tidak dapat membuka database");
 
//ambil parameter
$id_job = $_POST['id_job'];
 
if($id_job == ''){
     exit;
}else{
     $sql = "
          SELECT
               id_job,
               jabatan
          FROM
               lowongan
          WHERE
               id_job = '$id_job'
          ORDER BY jabatan
     ";
     $getListLowongan = mysql_query($sql,$koneksi) or die ('Query Gagal');
     while($data = mysql_fetch_array($getListLowongan)){
          echo '<option value="'.$data['id_job'].'">'.$data['jabatan'].'</option>';
     }
     exit;    
}
?>