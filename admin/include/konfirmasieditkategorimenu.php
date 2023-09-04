<?php 

if(isset($_SESSION['id_kategori_menu'])){
  $id_kategori_ = $_SESSION['id_kategori_menu'];
  $kategori_menu = $_POST['kategori_menu'];
 
   if(empty($kategori_menu)){
	header("Location:index.php?include=edit-kategori-menu&data=".$id_kategori_menu."&notif=editkosong");
  }else{
	$sql = "update `kategori_menu` set `kategori_menu`='$kategori_menu' 
	where `id_kategori_menu`='$id_kategori_menu'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_kategori_menu']);
	header("Location:index.php?include=kategori-menu&notif=editberhasil");
  }
}
?>
