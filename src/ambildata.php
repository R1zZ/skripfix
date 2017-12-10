<?php
$namaserver = "127.0.0.1";
$username = "root";
$password = "";
$database = "Lowongan";

mysql_connect( "127.0.0.1", "root", "") or die
	          (" tdk tersambung ke server".mysql_error() );
mysql_select_db("Lowongan") or die("Tidak dapat membuka database");

$id_persh = $_GET['id_persh'];

echo "<select name='kedua'>";

$rs = mysql_query ("SELECT id_job,jabatan FROM lowongan WHERE (id_persh='$id_persh')");
while ($r = mysql_fetch_array($rs))
    echo "<option value='$r[id_job]'>$r[jabatan]</option>";
echo "</select>";

?>