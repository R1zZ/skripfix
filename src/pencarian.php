<?php
                        if (isset($_POST['Submit'])) {
                            $host="localhost";
                            $username="root";
                            $password="Kelima354[]";
                            $db="Lowongan";

                            $connect=new mysqli($host,$username,$password,$db);
    //$find=mysqli_select_db($db);

                            $pengalaman_dibidang=$_POST['pengalaman_dibidang'];

                            $sql="SELECT perusahaan.nama_perusahaan,lowongan.nama_pekerjaan,lowongan.qty,lowongan.batas_lowongan,perusahaan.email from perusahaan join lowongan where lowongan.id_perusahaan=perusahaan.id_perusahaan and lowongan.pengalaman_dibidang='$pengalaman_dibidang'";
                            $result=mysqli_query($connect,$sql);
                            while ( $data=mysqli_fetch_array($result)) {
                                echo "
                                <center>Hasil Pencarian</center>
                                <table border='2' align='center'>
                                    <th>Perusahaan</th>
                                    <th>Jabatan</th>
                                    <th>Kuota</th>
                                    <th>Batas Pengumpulan</th>
                                    <th>Email</th>
                                    <tr >
                                        <td align='center'>".$data['nama_perusahaan']."</td>
                                        <td align='center'>".$data['nama_pekerjaan']."</td>
                                        <td align='center'>".$data['qty']."</td>
                                        <td align='center'>".$data['batas_lowongan']."</td>
                                        <td align='center'>".$data['email']."</td>
                                    </tr>
                                    </table>
                                ";
                            }
                            //echo $pengalaman_dibidang;
                        }
                    ?>
