<?php 
if ((isset($_GET['aksi'])) && (isset($_GET['data']))) {
  if ($_GET['aksi'] == 'hapus') {
    $id_menu = $_GET['data'];
    //get cover
    $sql_f = "SELECT `cover` FROM `menu` WHERE `id_menu`='$id_menu'";
    $query_f = mysqli_query($koneksi, $sql_f);
    $jumlah_f = mysqli_num_rows($query_f);
    if ($jumlah_f > 0) {
      while ($data_f = mysqli_fetch_row($query_f)) {
        $cover = $data_f[0];
        //menghapus cover
        unlink("cover/$cover");
      }
    }

    //hapus tag 
    $sql_dh = "delete from `tag_menu` where `id_menu` = '$id_menu'";
    mysqli_query($koneksi, $sql_dh);
    //hapus data 
    $sql_dm = "delete from `menu` where `id_menu` = '$id_menu'";
    mysqli_query($koneksi, $sql_dm);
  }
}
if (isset($_GET['aksi']) && isset($_POST['katakunci_menu'])) {
  if ($_GET['aksi'] == 'cari') {
    $_SESSION['katakunci_menu'] = $_POST['katakunci_menu'];
    $katakunci_menu = $_SESSION['katakunci_menu'];
  }
}
if (isset($_SESSION['katakunci_menu'])) {
  $katakunci_menu = $_SESSION['katakunci_menu'];
}
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h3><i class="fas fa-book"></i> Menu</h3>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active"> Menu</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Menu</h3>
      <div class="card-tools">
        <a href="index.php?include=tambah-menu" class="btn btn-sm btn-info float-right">
          <i class="fas fa-plus"></i> Tambah Menu</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="col-md-12">
        <form method="post" action="index.php?include=menu&aksi=cari">
          <div class="row">
            <div class="col-md-4 bottom-10">
              <input type="text" class="form-control" id="kata_kunci" name="katakunci_menu">
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
            <th width="30%">Nama Menu</th>
            <th width="20%">Harga Menu</th>
            <th width="30%">Kategori Menu</th>
            <th width="15%">
              <center>Aksi</center>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $batas = 5;
          if (!isset($_GET['halaman'])) {
            $posisi = 0;
            $halaman = 1;
          } else {
            $halaman = $_GET['halaman'];
            $posisi = ($halaman - 1) * $batas;
          }
          //menampilkan data 
          $sql_b = "SELECT `b`.`id_menu`, `b`.`nama_menu`,`b`.`harga_menu`,     
                            `k`.`kategori_menu` FROM `menu` `b`
                              INNER JOIN `kategori_menu` `k` ON `b`.`id_kategori_menu` = 
                              `k`.`id_kategori_menu` ";
          if (isset($katakunci_menu) && !empty($katakunci_menu)) {
            $sql_b .= " WHERE `k`.`kategori_menu` LIKE '%$katakunci_menu%'";
          }
          $sql_b .= " ORDER BY `k`.`kategori_menu`, `b`.`nama_menu`, `b`.`harga_menu` limit $posisi, $batas";
          $query_b = mysqli_query($koneksi, $sql_b);
          $no = $posisi + 1;
          while ($data_b = mysqli_fetch_row($query_b)) {
            $id_menu = $data_b[0];
            $nama_menu = $data_b[1];
            $kategori_menu = $data_b[2];
            $harga_menu = $data_b[3];
          ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $nama_menu; ?></td>
              <td><?php echo $kategori_menu; ?></td>
              <td><?php echo $harga_menu; ?></td>
              <td align="center">
                <a href="index.php?include=edit-menu&data=<?php echo $id_menu; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas 
                          fa-edit"></i></a>
                <a href="index.php?include=detail-menu&data=<?php echo $id_menu; ?>" class="btn btn-xs btn-info" title="Detail"><i class="fas 
                          fa-eye"></i></a>
                <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama_menu; ?>?')) window.location.href = 'index.php?include=menu&aksi=hapus&data=<?php echo $id_menu; ?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>
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
    $sql_jum = "SELECT `b`.`id_menu`, `b`.`nama_menu`,`b`.`harga_menu`,     
                `k`.`kategori_menu` FROM `menu` `b`
                  INNER JOIN `kategori_menu` `k` ON `b`.`id_kategori_menu` = 
                  `k`.`id_kategori_menu`";
    if (isset($katakunci_menu)) {
      $sql_jum .= " WHERE `b`.`nama_menu` LIKE '%$katakunci_menu%'";
    }
    $sql_jum .= " ORDER BY `k`.`kategori_menu`, `b`.`nama_menu`";
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
                    href='index.php?include=menu&halaman=1'>First</a></li>";
            echo "<li class='page-item'><a class='page-link' 
                    href='index.php?include=menu&halaman=$sebelum'>«</a></li>";
          }
          for ($i = 1; $i <= $jum_halaman; $i++) {
            if ($i > $halaman - 5 and $i < $halaman + 5) {
              if ($i != $halaman) {
                echo "<li class='page-item'><a class='page-link' 
                            href='index.php?include=menu&halaman=$i'>$i</a></li>";
              } else {
                echo "<li class='page-item'><a class='page-link'>$i</a></li>";
              }
            }
          }
          if ($halaman != $jum_halaman) {
            echo "<li class='page-item'><a class='page-link' 
                        href='index.php?include=menu&halaman=$setelah'>»</a></li>";
            echo "<li class='page-item'><a class='page-link' 
                        href='index.php?include=menu&halaman=$jum_halaman'>Last</a></li>";
          }
        } ?>
      </ul>
    </div>
  </div>
  <!-- /.card -->

</section>