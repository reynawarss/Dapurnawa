<?php 
// session_start();
// include('../koneksi/koneksi.php');
if(isset($_GET['data'])){
	$id_ = $_GET['data'];
	//gat data 
  $sql = "SELECT `b`.`cover`,`k`.`kategori_menu`,`b`.`nama_menu` FROM `` `b`
        INNER JOIN `kategori_menu` `k` ON 
        `b`.`id_kategori_menu`=`k`.`id_kategori_menu`";
  $query = mysqli_query($koneksi,$sql);
  while($data = mysqli_fetch_row($query)){
    $cover = $data[0];
    $kategori_menu = $data[1];
    $nama_menu = $data[2]; 
  }
}
?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Menu</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php?include=">Data Menu</a></li>
              <li class="breadcrumb-item active">Detail Data Menu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="index.php?include=" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table table-bordered">
<tbody>                      
    <tr>
        <td><strong>Foto Menu<strong></td>
        <td><img src="cover/<?php echo $cover;?>" 
        class="img-fluid" width="200px;"></td>
    </tr>               
    <tr>
        <td width="20%"><strong>Kategori Menu<strong></td>
        <td width="80%"><?php echo $kategori_menu;?></td>
    </tr>                 
    <tr>
        <td width="20%"><strong>Nama Menu<strong></td>
        <td width="80%"><?php echo $nama_menu;?></td>
    </tr>                 
    <tr>
        <td><strong>Tag<strong></td>
        <td>
        <ul>
        <?php
       //get tag
        $sql_h = "SELECT `t`.`tag` from `tag_menu` `tb`
                inner join `tag` `t`  ON  `tb`.`id_tag` = `t`.`id_tag` 
                where `tb`.`id_menu`='$id_menu'";
        $query_h = mysqli_query($koneksi,$sql_h);
        while($data_h = mysqli_fetch_row($query_h)){
        $tag= $data_h[0];
        ?>
        <li><?php echo $tag;?></li>
        <?php }?>
        </ul>
        </td>
      </tr>
  </tbody>
</table>

              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->