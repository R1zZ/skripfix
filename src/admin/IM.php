<?php include('header.php'); ?>
<div class="row">
  <!-- SIDEBAR -->
  <?php include ('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>INPUT MAHASISWA</h3>
      <div class="row">
        <div class="col-md-12">
          <div class='view'>
            <form action="actionMahasiswa.php" method="post">
              <table>
                <tr>
                  <td>NIM</td>
                  <td><input type="text" size="31" name="NIM" maxlength="11"></td>
                </tr>
                <tr>
                  <td>Nama Mahasiswa</td>
                  <td><input type="text" size="31" name="nama_mhs" maxlength="20"></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>    
                    <textarea name="alamat" rows="3" cols="30""></textarea>
                  </td>
                </tr>
                <tr>
                  <td>No Telphone</td>
                  <td><input type="text" size="31" name="no_tlp" maxlength="30"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="email" size="31" name="email" maxlength="50"></td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>
                    <input type="radio" name="JK" ckecked value="L">Laki-Laki
                    <input type="radio" name="JK" value="P">Perempuan
                  </td>
                </tr>
                <tr>
                  <td>Nama Jurusan</td>
                  <td>
                    <select name="nama_jurusan">
                      <option value="-">--Pilih Jurusan--</option>
                      <option value="TI">Teknik Informatika</option>
                      <option value="SI">Sistem Informasi</option>
                      <option value="MI">Manajemen Informatika</option>
                      <option value="KA">Komputer Akuntansi</option>
                      <option value="TK">Teknik Komputer</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>IPK</td>
                  <td><input type="text" size="31" name="IPK" maxlength="10"></td>
                </tr>
                <tr>
                  <td>Tempat Tanggal Lahir</td>
                  <td><input type="date" name="TTL"></td>
                </tr>
                <tr>
                  <td>Tahun Lulus</td>
                  <td><input type="year" name="th_lulus"></td>
                </tr>
                <tr>
                  <td>Minat Bidang</td>
                  <td>
                    <select name="minat_bidang">
                      <option value="-">--Pilih Bidang--</option>
                      <option value="website">Website</option>
                      <option value="mobile">Mobile</option>
                      <option value="jaringan">Network</option>
                      <option value="AI">Artificial Intelegent</option>
                      <option value="analisi">Analysist</option>
                      <option value="SofwareEngineering">Software Engineering</option>
                    </select>
                  </td>
                </tr>     
                <tr align="center">
                  <td colspan="2">
                    <input type="submit" name="Submit" value="Submit">
                    <input type="reset" value="Reset" name="reset">
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>