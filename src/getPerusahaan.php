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
$id_persh = $_POST['id_persh'];
 
if($id_persh == ''){
     exit;
}else{
     $sql = "
          SELECT
               id_persh,
               nama_persh
          FROM
               perusahaan
          WHERE
               id_persh = '$id_persh'
          ORDER BY nama_persh
     ";
     $getListPerusahaan = mysql_query($sql,$koneksi) or die ('Query Gagal');
     while($data = mysql_fetch_array($getListPerusahaan)){
          echo '<option value="'.$data['id_persh'].'">'.$data['nama_persh'].'</option>';
     }
     exit;    
}
?>