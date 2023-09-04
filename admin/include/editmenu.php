<?php
// session_start();
// include('../koneksi/koneksi.php');
if(isset($_GET['data'])){
	$id_menu = $_GET['data'];
	$_SESSION['id_menu']=$id_menu;
	//get data 
	$sql_m = "SELECT `id_kategori_menu`,`nama_menu`,`harga_menu`,'cover' FROM `menu` WHERE `id_menu`='$id_menu'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
		$id_kategori_menu = $data_m[0];
		$nama_menu = $data_m[1];
    $harga_menu = $data_m[2];
    $cover = $data_m[3];
	}
	//get tag
	$sql_h = "select `id_tag` from `tag_menu` 
        where `id_menu`='$id_menu'";
	$query_h = mysqli_query($koneksi,$sql_h);
	$array_tag = array();
	while($data_h = mysqli_fetch_row($query_h)){
		$id_tag= $data_h[0];
		$array_tag[] = $id_tag; 
	} 
}
?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Menu</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=menu">Data Menu</a></li>
              <li class="breadcrumb-item active">Edit Data Menu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Menu</h3>
        <div class="card-tools">
          <a href="index.php?include=menu" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data Menu
            <?php echo $_GET['jenis'];?> wajib di isi</div>
          <?php }?>
        <?php }?>
      </div>
      <form class="form-horizontal" action="index.php?include=konfirmasi-edit-menu" method="post" enctype="multipart/form-data">
        <div class="card-body">
          
        <div class="form-group row">
            <label for="foto" class="col-sm-3 col-form-label">Foto Menu </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="cover" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
      <label for="kategori" class="col-sm-3 col-form-label">Kategori 
      Menu</label>
      <div class="col-sm-7">
      <select class="form-control" id="kategori" name="kategori_menu">
      <option value="">- Pilih Kategori -</option>
      <?php 
      $sql_k = "SELECT `id_kategori_menu`,`kategori_menu` FROM 
      `kategori_menu` ORDER BY `kategori_menu`";
      $query_k = mysqli_query($koneksi, $sql_k);
      while($data_k = mysqli_fetch_row($query_k)){
      $id_kat = $data_k[0];
      $kat = $data_k[1];
      ?>
      <option value="<?php echo $id_kat;?>" 
      <?php if($id_kat==$id_kategori_menu){?>
      selected <?php }?>><?php echo $kat;?></option>
      <?php }?>
      </select>
      </div>
  </div>
  <div class="form-group row">
      <label for="judul" class="col-sm-3 col-form-label">Nama Menu</label>
      <div class="col-sm-7">
      <input type="text" class="form-control" name="nama_menu" id="nama_menu" 
      value="<?php echo $nama_menu;?>">
      </div>
  </div>
  <div class="form-group row">
     <label for="tag" class="col-sm-3 col-form-label">Tag</label>
     <div class="col-sm-7">
     <?php 
     $sql_g = "SELECT `id_tag`,`tag` FROM `tag`
     ORDER BY `tag`";
     $query_g = mysqli_query($koneksi, $sql_g);
     while($data_g = mysqli_fetch_row($query_g)){
     $id_tg = $data_g[0];
     $tg = $data_g[1];
     ?>
     <input type="checkbox"  name="tag[]" value="<?php echo $id_tg;?>"
     <?php if(in_array($id_tg, $array_tag)){?>checked="checked" <?php }?>> 
     <?php echo $tg;?> </br>
     <?php }?>
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