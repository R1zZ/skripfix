<?php
include "koneksi.php";

$nama			= $_POST['nama'];
$email			= $_POST['email'];
$pesan			= $_POST['isi'];


if (empty ($nama) or empty ($email) or empty($pesan)  )
{
echo "<script>alert('Data Harus Diisi Lengkap');
document.location.href='pesan.php'; </script>\n"; exit ;
}


$query = mysql_query ('insert into buku_tamu (nama,email ,isi)values("'.$nama.'","'.$email.'","'.$pesan.'")');

if($query) {
echo "<script>alert('Terima Kasih Telah Meninggalkan Pesan');
document.location.href='pesan.php'; </script>\n";
}else{
echo "<script>alert('Anda Tidak Dapat Meninggalkan Pesan');
document.location.href='pesan.php'; </script>\n";
}
?>