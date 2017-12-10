
<?php include('header.php'); ?>
<?php include('koneksi.php'); 

  // DELETE
  if (isset($_GET['kd_gejala'])) {
    $kd_gejala = $_GET['kd_gejala'];
    $pilih=$_GET['pilih']; 
    mysqli_query($konek,"DELETE FROM $pilih WHERE kd_gejala= $kd_gejala");
    header("location:admin-gejala.php?pilihan=$pilih&ok=ok");
  }
  ?>

<div class="row">
  <!-- SIDEBAR -->
  <?php include('sidebar-admin.php'); ?>
  <!-- CONTENT -->
  <div class="col-md-9">
    <div class="content">
      <h3>PENGETAHUAN GEJALA</h3>
      <form  method="get" >
        <div class="form-group"> 
          <label class="col-sm-4 control-label">Sistem Bahan Bakar</label> 
          <div class="col-sm-6"> 
            <select class="form-control" name="pilihan">
              <option value="">Pilihan </option>
              <option value="tb_gi">Injeksi</option>
              <option value="tb_gk">Konvensional</option>
            </select>
          </div> 
          <div class="col-sm-2">
            <button class="btn btn-primary btn-block" name="ok" value='ok'>OK</button>
          </div>
        </div>
        </form>
        <br>
        <br>
        <?php 
        if(isset($_GET['ok']))   
        {   
         if(empty($_GET['pilihan']))  
         {  
           echo "Anda belum memilih!";  
         }  
         else{
          if ($_GET['pilihan']=="tb_gk"){
            $plh="KONVENSIONAL";
          }
          else {
            $plh="INJEKSI";
   
                      }
          ?>
          <br>
          <div class="page-header">
            <h2><?php echo "$plh"; ?></h2>
          </div>
          <div class=" col-sm-9"></div>
          <div class="col-sm-3">
         
          <a href="tambah-gejala.php?pilihan=<?php echo $_GET['pilihan']; ?>" class="btn btn-success btn-block" role="button">TAMBAH </a>
            
                   </div>
          <table class="table table-striped"> 
            <thead> 
              <tr> 
                <th>No</th> 
                <th>Kode Gejala</th>
                <th>Nama Gejala</th> 
                <th>Nilai Bobot</th> 
                <th>AKSI</th> 
              </tr> 
            </thead>  
            <tbody>
              <?php 
              $pilih=$_GET['pilihan'];  
              $hasil=mysqli_query($konek,"select * from $pilih");
              $no = 1;
              if ($pilih=='tb_gk') {
                $kd="GK";
        
              } else{
                $kd="GI";
              }
              while($data = mysqli_fetch_array($hasil)) { ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $kd.$data['kd_gejala']; ?></td>
                <td><?php echo $data['nama_gejala']; ?></td>
                <td><?php echo $data['nilai_bobot']; ?></td>
                <td><a href="gejala-edit.php?kd_gejala=<?php echo $data['kd_gejala'];?>&pilih=<?php echo $pilih;?>""><img src="assets\img\pensil.png" height="30 px"/> </a>
                <a href="admin-gejala.php?kd_gejala=<?php echo $data['kd_gejala']?>&pilih=<?php echo $pilih;?>" onClick="javascript:return confirm('Anda yakin menghapus data ini?');"><img src="assets\img\del.png" height="30 px"/> </a></td>
              </tr>
              <?php $no++; }} }?> 
            </tbody>                
          </table>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <?php include('footer.php'); ?>