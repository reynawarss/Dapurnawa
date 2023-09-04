<?php 

$kategori_menu = $_POST['kategori_menu'];
if(empty($kategori_menu)){
	header("Location:index.php?include=tambah-kategori-menu&notif=tambahkosong");
}else{
	$sql = "insert into `kategori_menu` (`kategori_menu`) 
	values ('$kategori_menu')";
	mysqli_query($koneksi,$sql);
	header("Location:index.php?include=kategori-menu&notif=tambahberhasil");	
	echo "bisa cuy";
}
?>
