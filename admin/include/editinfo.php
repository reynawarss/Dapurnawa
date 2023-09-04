<?php 
if(isset($_GET['data'])){
	$id_info = $_GET['data'];
  $_SESSION['id_info'] = $id_info;
  $sql_z = "SELECT `judul_info`,`konten_info` FROM `info` WHERE `id_info`='$id_info'";
  //echo $sql;
  $query = mysqli_query($koneksi, $sql_z);
  while($data_z = mysqli_fetch_row($query)){
  $judul_info = $data_z[0];
  $konten_info = $data_z[1];
  }}
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Info</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=info">Data Info</a></li>
              <li class="breadcrumb-item active">Edit Data Info</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Info</h3>
        <div class="card-tools">
          <a href="index.php?include=info" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
        <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> wajib di isi</div>
          <?php }?>
        <?php }?>
      </div>
      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-edit-info">
        <div class="card-body">
          
        <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label">Kategori Info</label>
            <div class="col-sm-7">
              <select class="form-control" id="kategori" name="tag_info">
                <?php 
                  $sql = "SELECT `id_tag_info`,`tag_info` FROM `tag_info` ORDER BY `tag_info`";
                  //echo $sql;
                  $query = mysqli_query($koneksi, $sql);
                  while($data = mysqli_fetch_row($query)){
                    $id_tag_info = $data[0];
                    $tag_info = $data[1];
                    ?>
                    <option value="<?php echo $id_tag_info;?>"> <?php echo $tag_info;?></option>
                  <?php }
                  ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nim" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="judul_info" id="judul_info" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="konten_info" id="konten_info" rows="12"></textarea>
            </div>
          </div>

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>