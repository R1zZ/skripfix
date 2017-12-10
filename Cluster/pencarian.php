    <html>
    <meta charset="UTF-8">
    <title>Pencarian Lowongan</title>
      <link rel="stylesheet" href="../css/login.css">
      <link rel='stylesheet' type='text/css' href='../css/table.css'>

        <body>
          <form method="post">
            <div class="login">
              <div class="login-screen">
                <div class="app-title">
                  <h1>Cari Lowongan</h1>
                </div>
                <div class="login-form">
                  <div class="control-group">
                    <select name="NIM">
                      <option value="-">--Pilih NIM--</option>
                    <?php
                      $host="localhost";
                      $username="root";
                      $password="Kelima354[]";
                      $db="Lowongan";

                      $connect=new mysqli($host,$username,$password,$db);

                      $sql=mysqli_query($connect,"SELECT * FROM mahasiswa ORDER BY NIM ASC");
                      if (mysqli_num_rows($sql) !=0) {
                        while ($row=mysqli_fetch_assoc($sql)) {
                          echo '<option value='.$row['NIM'].'>'.$row['nama_mhs'].'</option>';
                        }
                      }
                    ?>
                    </select>
                  </div>
                  <div class="control-group">
                    <select name="pengalaman_dibidang">
                      <option value="-">--Pilih Pengalaman--</option>
                      <option value="website">Website</option>
                      <option value="mobile">Mobile</option>
                      <option value="jaringan">Network</option>
                      <option value="AI">Artificial Intelegent</option>
                      <option value="analisi">Analysist</option>
                      <option value="SofwareEngineering">Software Engineering</option>
                    </select>
                  </div>
                  <input type="submit" name="Submit" value="Cari" class="btn btn-primary btn-large btn-block" />
                  </p>
                  <a href="../index.html">Home</a>
                </div>
              </div>
            </div>
<?php
                        if (isset($_POST['Submit'])) {
                            $host="127.0.0.1";
                            $username="root";
                            $password="Kelima354[]";
                            $db="Lowongan";

                            $connect=new mysqli($host,$username,$password,$db);
    //$find=mysqli_select_db($db);

                            $pengalaman_dibidang=$_POST['pengalaman_dibidang'];
                            $NIM=$_POST['NIM'];
                            $query=mysqli_query($connect,"SELECT*FROM mahasiswa where NIM='$NIM'");
                            $hasil=mysqli_fetch_array($query);

                            $sql="SELECT perusahaan.nama_perusahaan,lowongan.nama_pekerjaan,lowongan.qty,lowongan.batas_lowongan,perusahaan.email from perusahaan join lowongan where lowongan.id_perusahaan=perusahaan.id_perusahaan and lowongan.pengalaman_dibidang='$pengalaman_dibidang'";
                            $result=mysqli_query($connect,$sql);
                            while ( $data=mysqli_fetch_array($result)) {
                                echo "
                                <div class='login-screen'>
                                  <center>Informasi Lowongan Pekerjaan</center>
                                  <center><p>Hai ".$hasil['nama_mhs']."</p>
                                  <p>Selamat Atas Kelulusannya di tahun ".$hasil['th_lulus']." dari data pencarian yang anda input berikut Hasilnya :</p><center>
                                  <div style='overflow-x:auto;'>
                                    <table cellspacing='0' align='center'>
                                      <th>Perusahaan</th>
                                      <th>Jabatan</th>
                                      <th>Kuota</th>
                                      <th>Batas Pengumpulan</th>
                                      <th>Email</th>
                                      <tr>
                                        <td data-content='nama_perusahaan' align='center'>".$data['nama_perusahaan']."</td>
                                        <td data-content='nama_pekerjaan' align='center'>".$data['nama_pekerjaan']."</td>
                                        <td data-content='qty' align='center'>".$data['qty']."</td>
                                        <td data-content='batas_lowongan' align='center'>".$data['batas_lowongan']."</td>
                                        <td data-content='email' align='center'>".$data['email']."</td>
                                      </tr>
                                    </table>
                                  <p>jika ingin info lebih lanjut silahkan hubungi bagian admin Akakom Career Center</p>
                                  </div>
                                </div>
                                ";
                            }
                        }
                    ?>
          </form>
        </body>
     </html>