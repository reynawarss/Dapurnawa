<?php 
$id_tag_info = $_POST['tag_info'];
$judul_info = $_POST['judul_info'];
$konten_info = $_POST['konten_info'];

if(empty($id_tag_info)){
	header("Location:index.php?include=tambah-info&notif=tambahtagkosong");
}else if(empty($judul_info)){
	header("Location:index.php?include=tambah-info&notif=tambahjudulkosong");
}else if(empty($konten_info)){
	header("Location:index.php?include=tambah-info&notif=tambahisikosong");
}else{
	$sql = "INSERT INTO `info` (`id_tag_info`, `judul_info`, `konten_info`) VALUES ('$id_tag_info', '$judul_info', '$konten_info')";
	echo $sql;
	mysqli_query($koneksi,$sql);
header("Location:index.php?include=info&notif=tambahinfoberhasil");	
}
?>