<?php include 'header.php' ?>
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="inputlamaran.php">

            <div class="form-title-row">
                <h1>Input Lamaran</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>ID Perusahaan</span>
                    <select name="id_perusahaan">
                        <option>--Pilih Perusahaan</option>
                            <?php
                                $host="localhost";
                                $username="root";
                                $password="Kelima354[]";
                                $db="Lowongan";
                                $connect=new mysqli($host,$username,$password,$db);
                                $sql=mysqli_query($connect,"SELECT * FROM perusahaan ORDER BY id_perusahaan ASC");
                                    if (mysqli_num_rows($sql) !=0) {
                                        while ($row=mysqli_fetch_assoc($sql)) {
                                            echo '<option value='.$row['id_perusahaan'].'>'.$row['nama_perusahaan'].'</option>';
                                        }
                                    }
                            ?>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>ID Pekerjaan</span>
                    <select name="id_job">
                        <option value="-">--pilih Pekerjaan--</option>
                            <?php
                                $host="localhost";
                                $username="root";
                                $password="Kelima354[]";
                                $db="Lowongan";
                                $connect=new mysqli($host,$username,$password,$db);
                                $sql=mysqli_query($connect,"SELECT * FROM lowongan ORDER BY id_job ASC");
                                    if (mysqli_num_rows($sql) !=0) {
                                        while ($row=mysqli_fetch_assoc($sql)) {
                                            echo '<option value='.$row['id_job'].'>'.$row['nama_pekerjaan'].'</option>';
                                        }
                                    }
                            ?>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>ID Mahasiswa</span>
                    <select name="NIM">
                        <option value="-">--pilih Nama Mahasiswa--</option>
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
                </label>
            </div>

<!--            <div class="form-row">
                <label>
                    <span>Surat Lamaran</span>
                </label>
            </div>

            <div class="form-row">
                <label><span>CV</span></label>
            </div> -->

            <div class="form-row">
                <center><input type="submit" name="Submit" value="Submit"></center>
            </div>
            <div class="form-row">
                <center><a href="../../index.html">Home</a></center>
            </div>
<?php include 'footer.php' ?>