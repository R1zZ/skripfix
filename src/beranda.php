<?php
include 'headeradmin.php';
include 'sidebar.php';
?>

<section class="mainContent">
        <article class="productInfo">
          <div id="konten">
<p>Hai, <i><?php echo $login_session; ?></i>,</p>
<p>Selamat atas Kelulusannya di tahun <?php echo $th; ?>, dari data yang anda inputkan sebelumnya berikut list lowongan pekerjaan yang sesuai dengan data anda yang ada di Akakom career Center saat ini :</p>
<p>
<table border="1">
  <tr>
    <th>Perusahaan</th>
    <th>Lowongan</th>
  </tr>

</table>
</p>
<p>Jika ingin mengajukan lamaran,silahkan datang ke ACC atau bisa upload cv lamaran anda di <a href="www.acc.akakom.id\upload\CV">www.acc.akakom.id\upload\CV</a> atatu bisa langsung ke situs perusahaan yang ada di list lowongan pekerjaan diatas.</p>
<p>Terima kasih telah menggunakan aplikasi ini dan semoga anda dapat di terima di perusahaan yang anda inginkan.</p>

<?php 
include 'footeradmin.php'; 
?>