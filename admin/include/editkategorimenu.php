<?php 
if(isset($_GET['data'])){
	$id_kategori_menu = $_GET['data'];
	$_SESSION['id_kategori_menu']=$id_kategori_menu;
	
    //get data kategori 
	  $sql_d = "select `kategori_menu` from `kategori_menu` where `id_kategori_menu` = '$id_kategori_menu'";
    $query_d = mysqli_query($koneksi,$sql_d);
    while($data_d = mysqli_fetch_row($query_d)){
       $kategori_menu= $data_d[0];
    }
}
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i>Edit Kategori Menu</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=kategori-menu" class="btn btn-sm btn-warning float-right"></a></li>
              <!-- <li class="breadcrumb-item active">Edit Kategori Buku</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Kategori Menu</h3>
        <div class="card-tools">
          <a href="index.php?include=kategori-menu" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
      <?php if(!empty($_GET['notif'])){?>
        <?php if($_GET['notif']=="editkosong"){?>
          <div class="alert alert-danger" role="alert">Maaf data kategori Menu wajib di isi</div>
        <?php }?>
      <?php }?>

      </div>
      <form class="form-horizontal" action="index.php?include=konfirmasi-edit-kategori-menu" method="post">
        <div class="card-body">
          <div class="form-group row">
            <label for="kategori_menu" class="col-sm-3 col-form-label">Kategori Menu</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="Kategori_Menu" name="kategori_menu" value="<?php echo $kategori_menu;?>">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
