<?php 
      if(isset($_GET['data'])){
        $id_info = $_GET['data'];
      //get profil
      $sql = "SELECT `b`.`id_info`, `k`.`tag_info`, `b`.`judul_info`, `b`.`konten_info` FROM `info` `b` INNER JOIN `tag_info` `k` ON `b`.`id_tag_info` = `k`.`id_tag_info` WHERE `b`.`id_info` = '$id_info'";
      //echo $sql;
      $query = mysqli_query($koneksi, $sql);
      while($data = mysqli_fetch_row($query)){
        $id_info = $data[0];
        $tag_info = $data[1];
        $judul_info = $data[2];
        $konten_info = $data[4];
      }}
?>
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3><i class="fas fa-user-tie"></i> Detail Data info</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?include=info">Data info</a></li>
            <li class="breadcrumb-item active">Detail Data info</li>
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
                <a href="index.php?include=info" class="btn btn-sm btn-warning float-right">
                <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                  <tbody>                 
                    <tr>
                      <td width="20%"><strong>Tanggal<strong></td>
                      <td width="80%"><?php echo $tanggal;?></td>
                    </tr>              
                    <tr>
                      <td width="20%"><strong>Kategori info<strong></td>
                      <td width="80%"><?php echo $kategori_info;?></td>
                    </tr>                 
                    <tr>
                      <td width="20%"><strong>Judul<strong></td>
                      <td width="80%"><?php echo $judul;?></td>
                    </tr> 
                    <tr>
                      <td width="20%"><strong>Isi<strong></td>
                      <td width="80%"><?php echo $isi;?></td>
                    </tr>
                  </tbody>
                </table>  
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">&nbsp;</div>
          </div>
          <!-- /.card -->

  </section>