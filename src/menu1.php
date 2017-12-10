<?php
include 'headeradmin.php';
include 'sidebar.php';
?>
<div class="col-md-9">


<form action="actionMahasiswa.php" method="post">
	<table cellpadding="0" cellspacing="0">
		<tr>
			<td>NIM</td>
			<td><input type="text" name="NIM" maxlength="20" placeholder="123456789"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td>
			<td><input type="text" name="nama_mhs" maxlength="20" placeholder="Example Name"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea rows="5" cols="50" name="alamt" placeholder="Jl.contoh NO...."></textarea></td>
		</tr>
		<tr>
			<td>No telp</td>
			<td><input type="text" name="no_tlp" placeholder="6281234xxxxxx"></td>
		</tr>
		<tr>
				<td>Jurusan</td>
			<td><select name="nama_jurusan">
				<option value="-">--Pilih Jurusan--</option>
				<option value="TI">Teknik Informatika</option>
				<option value="SI">Sistem Informasi</option>
				<option value="MI">Manajemen informatika</option>
				<option value="KA">Komputerisasi Akuntansi</option>
				<option value="TK">Teknik Komputer</option>
			</select></td>
		</tr>		
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" placeholder="Example@gmail.com"></td>
		</tr>
		<tr>
			<td>IPK</td>
			<td><input type="text" name="IPK" placeholder="8.88"></td>
		</tr>
			
		<tr>
			<td>Jenis Kelamin</td>
			<td>
			<input type="radio" name="JK" value="P">Pria
			<input type="radio" name="JK" value="L">Wanita
			<input type="radio" name="JK" value="PL">Pria dan Wanita				
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="TTL"></td>
		</tr>
		<tr>
			<td>Minat Bidang</td>
			<td><select name="minat_bidang">
				<option value="-">--Pilih Bidang--</option>
				<option value="website">Website</option>
				<option value="mobile">Mobile</option>
				<option value="jaringan">Network</option>
				<option value="AI">Artificial Intelegent</option>
				<option value="analisi">Analysist</option>
				<option value="etc">Lainya</option>
			</select></td>
		</tr>
		<tr>
			<td>Tahun Kelulusan</td>
			<td><input type="text" name="th_lulus" placeholder="20xx"></td>
		</tr>

		<tr>
			<td><input type="submit" name="Submit" value="Submit"></td>
			<td><input type="submit" name="reset" value="reset"></td>
		</tr>
	</table>	
</form>
<?php 
include 'footeradmin.php'; 
?>