<?php



echo "<h3>Data yang dimasukkan:</h3>";

foreach($_POST as $key => $data)
{
	echo "<p>$key = $data</p>";
}

?>