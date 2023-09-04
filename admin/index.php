<?php 
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
  $include = $_GET["include"];
  if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
  }
  else if($include=="signout"){
    include("include/signout.php");
  }
  else if($include=="konfirmasi-tambah-kategori-menu"){
    include("include/konfirmasitambahkategorimenu.php");
  }
  else if($include=="konfirmasi-edit-kategori-menu"){
    include("include/konfirmasieditkategorimenu.php");
  }
  else if($include=="konfirmasi-tambah-user"){
    include("include/konfirmasitambahuser.php");
  }
  else if($include=="konfirmasi-edit-user"){
    include("include/konfirmasiedituser.php");
  }
  else if($include=="konfirmasi-tambah-tag"){
    include("include/konfirmasitambahtag.php");
  }
  else if($include=="konfirmasi-edit-tag"){
    include("include/konfirmasiedittag.php");
  }
  else if($include=="konfirmasi-tambah-menu"){
    include("include/konfirmasitambahmenu.php");
  }
  else if($include=="konfirmasi-edit-menu"){
    include("include/konfirmasieditmenu.php");
  }
  else if($include=="konfirmasi-edit-konten"){
    include("include/konfirmasieditkonten.php");
  }
  else if($include=="konfirmasi-tambah-info"){
    include("include/konfirmasitambahinfo.php");
  }
  else if($include=="konfirmasi-edit-info"){
    include("include/konfirmasieditinfo.php");
  }
  else if($include=="konfirmasi-tambah-kategori-info"){
    include("include/konfirmasitambahkategoriinfo.php");
  }
  else if($include=="konfirmasi-edit-kategori-info"){
    include("include/konfirmasieditkategoriinfo.php");
  }
  else if($include=="konfirmasi-edit-profil"){
    include("include/konfirmasieditprofil.php");
  }
  else if($include=="konfirmasi-ubah-password"){
    include("include/konfirmasiubahpassword.php");
  }else if($include=="konfirmasi-edit-promo"){
    include("include/konfirmasieditpromo.php");
}else if($include=="konfirmasi-tambah-promo"){
include("include/konfirmasitambahpromo.php");}
}
?>

<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?>
</head>
<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
  	if(isset($_SESSION['id_user'])){
      ?>
      <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
        <?php include("includes/header.php") ?>
        <?php include("includes/sidebar.php") ?>
        <div class="content-wrapper">
          <?php 
          if($include=="kategori-menu"){
            include("include/kategorimenu.php");
          }else if($include=="tambah-kategori-menu"){
              include("include/tambahkategorimenu.php");
          }else if($include=="edit-kategori-menu"){
                include("include/editkategorimenu.php");
          }else if($include=="promo"){
                  include("include/promo.php");
          }else if($include=="tambah-promo"){
                    include("include/tambahpromo.php");
          }else if($include=="edit-promo"){
                      include("include/editpromo.php");
          }else if($include=="konfirmasi-tambah-promo"){
            include("include/konfirmasitambahpromo.php");
          }else if($include=="user"){
            include("include/user.php");
          }else if($include=="tambah-user"){
          include("include/tambahuser.php");
          }else if($include=="edit-user"){
           include("include/edituser.php");
          }else if($include=="detail-user"){
            include("include/detailuser.php");   
          }else if($include=="tag"){
            include("include/tag.php");
          }else if($include=="tambah-tag"){
          include("include/tambahtag.php");
          }else if($include=="edit-tag"){
           include("include/edittag.php");
          }else if($include=="detail-tag"){
            include("include/detailtag.php");   
          }else if($include=="menu"){
            include("include/menu.php");
          }else if($include=="tambah-menu"){
          include("include/tambahmenu.php");
          }else if($include=="edit-menu"){
           include("include/editmenu.php");
          }else if($include=="detail-menu"){
            include("include/detailmenu.php");
          }else if($include=="konten"){
            include("include/konten.php");
          }else if($include=="edit-konten"){
            include("include/editkonten.php");
          }else if($include=="detail-konten"){
            include("include/detailkonten.php");   
          }else if($include=="ubah-password"){
            include("include/ubahpassword.php");   
          }else if($include=="info"){
            include("include/info.php");
          }else if($include=="tambah-info"){
          include("include/tambahinfo.php");
          }else if($include=="edit-info"){
           include("include/editinfo.php");
          }else if($include=="detail-info"){
            include("include/detailinfo.php");   
          }elseif($include=="tag-info"){
            include("include/taginfo.php");
          }else if($include=="tambah-tag-info"){
              include("include/tambahtaginfo.php");
          }else if($include=="edit-tag-info"){
                include("include/edittaginfo.php");
          }else if($include=="detail-tag-info"){
            include("include/edittaginfo.php");
          }
          else if($include=="edit-profil"){
            include("include/editprofil.php");
          }
          else{
            include("include/profil.php");
          }  
          ?>
        </div>
        <!-- /.content-wrapper -->
        <?php include("includes/footer.php") ?>
      </div>
      <!-- ./wrapper -->
      <?php include("includes/script.php") ?>
    </body>
<?php
  	}else{
    //pemanggilan halaman form login
    include("include/login.php");
  	}  
}else{
  if(isset($_SESSION['id_user'])){
    ?>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
          <?php include("includes/header.php") ?>
          <?php include("includes/sidebar.php") ?>
          <div class="content-wrapper">
          <?php
            //pemanggilan profil
            include("include/profil.php");
          ?>
          </div>
          <!-- /.content-wrapper -->
          <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
      </body>
      <?php  
  }else{
  //pemanggilan halaman form login
    include("include/login.php");
  } 
}
?>


</html>