<?php include 'header.php'; ?>
<html>
<head>
  <title>Tes Combobox</title>
</head>

<body>

<script type='text/javascript'>
function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}

var xmlhttp = createRequestObject();

function rubah(combobox)
{
    var id_persh = combobox.value;
    if (!id_persh) return;
    xmlhttp.open('get', 'ambildata.php?id_persh='+id_persh, true);
    xmlhttp.onreadystatechange = function() {
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
        {
             document.getElementById("divkedua").innerHTML = xmlhttp.responseText;
        }
        return false;
    }
    xmlhttp.send(null);
}

function ceksubmit()
{
   var div = document.getElementById("divkedua");
   if (!div.firstChild)
   {
   	alert('Belum milih');
   	return false;
   }
   document.forms[0].pilihan.value = div.firstChild.value;
   return true;
}

</script>

<?php

$namaserver = "127.0.0.1";
$username = "root";
$password = "";
$database = "Lowongan";

mysql_connect($namaserver, $username, $password) or die("Tidak dapat konek");
mysql_select_db($database) or die("Tidak dapat membuka database");

      $query = "SELECT id_persh, nama_persh FROM perusahaan ORDER BY nama_persh";
      $rs = mysql_query($query) or die(mysql_error());
      $cbstr = "";
      while ($r = mysql_fetch_array($rs))
      {
      	$cbstr .= "<option value='$r[id_persh]'>$r[nama_persh]</option>";
      }
?>

<table border='0' cellspacing='0' cellpadding='1' bgcolor='#0066FF' width='100%'><tr><td>
<table border='0' width='100%' bgcolor='#0099FF'>
<form method='post' action='simpan.php' o nsubmit='return ceksubmit()'>
<tr><td colspan='3'>&nbsp;</td></tr>
<tr><td align='right'>Perusahaan</td><td>
<select name='id_persh' onchange='javascript:rubah(this)'>
<option>--Pilih Satu--</option>
<?php echo $cbstr; ?>
</select></td></tr>
<tr><td align='right'>Lowongan</td><td><div id='divkedua'></div></td></tr>
<input type='hidden' name='id_job' value='' onchange='javascript:JOB(this)'>
<tr><td  colspan='3' align='center'><input type='submit' name='simpan' value='Simpan'></td></tr>
<tr><td>&nbsp;</td></tr></form></table>
</td></tr></table>
</body></html>

<?php include 'footer.php'; ?>