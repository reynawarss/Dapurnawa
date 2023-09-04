<?php 
    // include('../koneksi/koneksi.php');
    $promo = $_POST['judul'];

    if(empty($promo)){
	header("Location:index.php?include=tambah-promo&notif=tambahkosong&
        jenis=judul");
    }
    else{   
	$sql = "INSERT INTO `promo`( `promo` ) VALUES ('$promo' )";
	mysqli_query($koneksi,$sql);
	$id_promo = mysqli_insert_id($koneksi);

    header("Location:index.php?include=promo&notif=tambahberhasil");
    }
?>

