<?php 
include('../koneksi/koneksi.php');
if(isset($_SESSION['id_promo'])){    
    $id_promo = $_SESSION['id_promo'];
    $promo = $_POST['promo'];
    $lokasi_file = $_FILES['cover']['tmp_name'];
    $nama_file = $_FILES['cover']['name'];
    $direktori = 'cover/'.$nama_file;
 
    //get cover 
    $sql_f = "SELECT `cover` FROM `promo` WHERE `id_promo`='$id_promo'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $cover = $data_f[0];
        //echo $foto;
    } 
   
    if(empty($id_promo)){
	    header("Location:index.php?include=edit-promo&data=$id_promo&notif=editkosong
         &jenis=id");
	}else if(empty($promo)){
	    header("Location:index.php?include=edit-promo&data=$id_promo&notif=editkosong
         &jenis=promo");
	}else{
         $lokasi_file = $_FILES['cover']['tmp_name'];
	   $nama_file = $_FILES['cover']['name'];
	   $direktori = 'cover/'.$nama_file;
	   if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($cover)){
                unlink("cover/$cover");
            }}}
	$sql = "UPDATE `promo` set 
    `id_promo`='$id_promo',`promo`='$promo',
    `cover`='$nama_file'
	WHERE `id_promo`='$id_promo'";
	mysqli_query($koneksi,$sql);
}else{
	$sql = "UPDATE `promo` set 
    `id_promo`='$id_promo',`promo`='$promo',
	WHERE `id_promo`='$id_promo'";
	mysqli_query($koneksi,$sql);
}
header("Location:index.php?include=promo&notif=editberhasil");



?>
