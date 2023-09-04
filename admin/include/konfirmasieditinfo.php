<?php 
session_start();
include('../koneksi/koneksi.php');
// $id_user = $_SESSION['id_user'];
// // kurang user
if(isset($_SESSION['id_info'])){
$id_info = $_SESSION['id_info'];
$id_tag_info = $_POST['tag_info'];
$judul_info = $_POST['judul_info'];
$konten_info = $_POST['konten_info'];

if(empty($id_tag_info)){
	header("Location:index.php?include=edit-info&notif=tambahtagkosong");
}else if(empty($judul_info)){
	header("Location:index.php?include=edit-info&notif=tambahjudulkosong");
}else if(empty($konten_info)){
	header("Location:index.php?include=edit-info&notif=tambahisikosong");
}else{
	$sql = "UPDATE `info` SET `id_tag_info`='$id_tag_info', `judul_info`='$judul_info', `konten_info`='$konten_info' WHERE `id_info`='$id_info'";

	mysqli_query($koneksi,$sql);
    unset($_SESSION['id_info']);
header("Location:index.php?include=info&notif=editinfoberhasil");	
}}
?>