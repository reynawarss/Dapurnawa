<?php 
if ((isset($_GET['aksi'])) && (isset($_GET['data']))) {
  if ($_GET['aksi'] == 'hapus') {
    $id_info = $_GET['data'];

    //hapus tag 
    $sql_dh = "delete from `tag_info` where `id_tag_info` = '$id_tag_info'";
    mysqli_query($koneksi, $sql_dh);
    //hapus data 
    $sql_dm = "delete from `info` where `id_info` = '$id_info'";
    mysqli_query($koneksi, $sql_dm);
  }
}
if (isset($_GET['aksi']) && isset($_POST['katakunci_info'])) {
  if ($_GET['aksi'] == 'cari') {
    $_SESSION['katakunci_info'] = $_POST['katakunci_info'];
    $katakunci_info = $_SESSION['katakunci_info'];
  }
}
if (isset($_SESSION['katakunci_info'])) {
  $katakunci_info = $_SESSION['katakunci_info'];
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-book"></i> Info</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active"> Info</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Info</h3>
      <div class="card-tools">
        <a href="index.php?include=tambah-info" class="btn btn-sm btn-info float-right">
          <i class="fas fa-plus"></i> Tambah Info</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="col-md-12">
        <form method="post" action="index.php?include=info&aksi=cari">
          <div class="row">
            <div class="col-md-4 bottom-10">
              <input type="text" class="form-control" id="kata_kunci" name="katakunci_info">
            </div>
            <div class="col-md-5 bottom-10">
              <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
            </div>
          </div><!-- .row -->
        </form>
      </div><br>
      <div class="col-sm-12">
        <?php if (!empty($_GET['notif'])) { ?>
          <?php if ($_GET['notif'] == "tambahberhasil") { ?>
            <div class="alert alert-success" role="alert">
              Data Berhasil Ditambahkan</div>
          <?php } else if ($_GET['notif'] == "editberhasil") { ?>
            <div class="alert alert-success" role="alert">
              Data Berhasil Diubah</div>
          <?php } else if ($_GET['notif'] == "hapusberhasil") { ?>
            <div class="alert alert-success" role="alert">
              Data Berhasil Dihapus</div>
          <?php } ?>
        <?php } ?>
        <!-- <div class="alert alert-success" role="alert">Data Berhasil Diubah</div> -->
      </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="30%">Judul</th>
            <th width="20%">Konten</th>
            <th width="15%">
              <center>Aksi</center>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $batas = 2;
          if (!isset($_GET['halaman'])) {
            $posisi = 0;
            $halaman = 1;
          } else {
            $halaman = $_GET['halaman'];
            $posisi = ($halaman - 1) * $batas;
          }
          //menampilkan data 
          $sql_b = "SELECT `b`.`id_info`, `b`.`judul_info`,`b`.`konten_info`,     
                            `k`.`tag_info` FROM `info` `b`
                              INNER JOIN `tag_info` `k` ON `b`.`id_tag_info` = 
                              `k`.`id_tag_info` ";
          if (isset($katakunci_info) && !empty($katakunci_info)) {
            $sql_b .= " WHERE `k`.`tag_info` LIKE '%$katakunci_info%'";
          }
          $sql_b .= " ORDER BY `k`.`tag_info`, `b`.`judul_info`, `b`.`konten_info` limit $posisi, $batas";
          $query_b = mysqli_query($koneksi, $sql_b);
          $no = $posisi + 1;
          while ($data_b = mysqli_fetch_row($query_b)) {
            $id_info = $data_b[0];
            $tag_info = $data_b[1];
            $judul_info = $data_b[2];
            $konten_info = $data_b[3];
          ?>
            <tr>
              <td><?php echo $id_info; ?></td>
              <td><?php echo $judul_info; ?></td>
              <td><?php echo $konten_info; ?></td>
              <td align="center">
                <a href="index.php?include=edit-info&data=<?php echo $id_info; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas 
                          fa-edit"></i></a>
                <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $judul_info; ?>?')) window.location.href = 'index.php?include=info&aksi=hapus&data=<?php echo $id_info; ?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>
              </td>
            </tr>
          <?php $no++;
          } ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <?php
    //hitung jumlah semua data 
    $sql_jum = "SELECT `b`.`id_info`, `b`.`judul_info`,`b`.`konten_info`,     
    `k`.`id_tag_info` FROM `info` `b`
      INNER JOIN `tag_info` `k` ON `b`.`id_tag_info` = 
      `k`.`id_tag_info` ";
    if (isset($katakunci_info)) {
      $sql_jum .= " WHERE `b`.`judul_info` LIKE '%$katakunci_info%'";
    }
    $sql_jum .= " ORDER BY `k`.`tag_info`, `b`.`judul_info`";
    $query_jum = mysqli_query($koneksi, $sql_jum);
    $jum_data = mysqli_num_rows($query_jum);
    $jum_halaman = ceil($jum_data / $batas);
    ?>
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <?php
        if ($jum_halaman == 0) {
          //tidak ada halaman
        } else if ($jum_halaman == 1) {
          echo "<li class='page-item'><a class='page-link'>1</a></li>";
        } else {
          $sebelum = $halaman - 1;
          $setelah = $halaman + 1;
          if ($halaman != 1) {
            echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=info&halaman=1'>First</a></li>";
            echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=info&halaman=$sebelum'>«</a></li>";
          }
          for ($i = 1; $i <= $jum_halaman; $i++) {
            if ($i > $halaman - 5 and $i < $halaman + 5) {
              if ($i != $halaman) {
                echo "<li class='page-item'><a class='page-link' 
                            href='index.php?include=info&halaman=$i'>$i</a></li>";
              } else {
                echo "<li class='page-item'><a class='page-link'>$i</a></li>";
              }
            }
          }
          if ($halaman != $jum_halaman) {
            echo "<li class='page-item'><a class='page-link' 
                        href='index.php?include=info&halaman=$setelah'>»</a></li>";
            echo "<li class='page-item'><a class='page-link' 
                        href='index.php?include=info&halaman=$jum_halaman'>Last</a></li>";
          }
        } ?>
      </ul>
    </div>
  </div>
  <!-- /.card -->

</section>