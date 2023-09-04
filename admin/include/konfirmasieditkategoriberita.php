<?php 

if(isset($_SESSION['id_kategori_berita'])){
  $id_kategori_berita = $_SESSION['id_kategori_berita'];
  $kategori_berita = $_POST['kategori_berita'];
 
   if(empty($kategori_berita)){
	header("Location:index.php?include=edit-kategori-berita&data=".$id_kategori_berita."&notif=editkosong");
  }else{
	$sql = "update `kategori_berita` set `kategori_berita`='$kategori_berita' 
	where `id_kategori_berita`='$id_kategori_berita'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_kategori_berita']);
	header("Location:index.php?include=kategori-berita&notif=editberhasil");
  }
}
?>
