<?php
// session_start();
// include('../koneksi/koneksi.php');
if(isset($_GET['data'])){
	$id_promo = $_GET['data'];
	$_SESSION['id_promo']=$id_promo;
	//get data 
	$sql_m = "SELECT `id_promo`,`promo`,'cover' FROM `promo` WHERE `id_promo`='$id_promo'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$id_promo= $data_m[0];
		$promo = $data_m[1];
    $cover = $data_m[2];
	}
}
?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Promo</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=promo">Data Promo</a></li>
              <li class="breadcrumb-item active">Edit Data Promo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Promo</h3>
        <div class="card-tools">
          <a href="index.php?include=promo" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data promo
            <?php echo $_GET['jenis'];?> wajib di isi</div>
          <?php }?>
        <?php }?>
      </div>
      <form class="form-horizontal" action="index.php?include=konfirmasi-edit-promo" method="POST">
        <div class="card-body">
          
        <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto Promo </label>
            <div class="col-sm-7">
            <div class="custom-file">
            <input type="file" class="custom-file-input" name="cover" 
              id="customFile">
            <label class="custom-file-label" for="customFile">Choose 
              file</label>
            </div>
            </div>
          </div>
  <div class="form-group row">
      <label for="judul" class="col-sm-3 col-form-label">Nama Promo</label>
      <div class="col-sm-7">
      <input type="text" class="form-control" name="promo" id="promo" 
      value="<?php echo $promo;?>">
      </div>
  </div>         
  </div>
 </div>
 </div>
 <!-- /.card-body -->
 <div class="card-footer">
    <div class="col-sm-12">
    <button type="submit" class="btn btn-info float-right"><i class="fas 
    fa-save"></i> Simpan</button>
    </div>  
    </div>
    <!-- /.card-footer -->
</form>

    </div>
    <!-- /.card -->

    </section>