<?php 

$tag_info = $_POST['tag_info'];
if(empty($tag_info)){
	header("Location:index.php?include=tambah-tag-info&notif=tambahkosong");
}else{
	$sql = "insert into `tag_info` (`tag_info`) 
	values ('$tag_info')";
	mysqli_query($koneksi,$sql);
	header("Location:index.php?include=tag_info&notif=tambahberhasil");	
}
?>
