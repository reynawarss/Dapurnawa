<?php 
include('../koneksi/koneksi.php');
var_dump($_POST);
echo "<br>";

var_dump($_FILES);
if(isset($_SESSION['id_menu'])){
    $id_menu = $_SESSION['id_menu'];
    $id_kategori_menu = $_POST['kategori_menu'];
    $nama_menu = $_POST['nama_menu'];
    $tag = $_POST['tag'];
    $lokasi_file = $_FILES['cover']['tmp_name'];
    $nama_file = $_FILES['cover']['name'];
    $direktori = 'cover/'.$nama_file;

    $sql_f = "SELECT `cover` FROM `menu` WHERE `id_menu`='$id_menu'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $cover = $data_f[0];
    }
    //get cover f

    if(empty($id_kategori_menu)){
        header("Location:index.php?include=edit-menu&data=$id_menu&notif=editkosong
            &jenis=kategori");
    }else if(empty($nama_menu)){
        header("Location:index.php?include=edit-menu&data=$id_menu&notif=editkosong
            &jenis=nama");
    }else if(empty($tag)){
        header("Location:index.php?include=edit-menu&data=$id_menu&notif=editkosong
            &jenis=tag");
    }else{
        $lokasi_file = $_FILES['cover']['tmp_name'];
        $nama_file = $_FILES['cover']['name'];
        $direktori = 'cover/'.$nama_file;

        if(move_uploaded_file($lokasi_file,$direktori)){
            if(!empty($cover)){
                unlink("cover/$cover");
            }
            $sql = "UPDATE `menu` set 
            `id_kategori_menu`='$id_kategori_menu',`nama_menu`='$nama_menu',
            `cover`='$nama_file'
            WHERE `id_menu`='$id_menu'";
            echo "<br>$sql";
            mysqli_query($koneksi,$sql);
        }
    
        else{
            $sql = "UPDATE `menu` set 
            `id_kategori_menu`='$id_kategori_menu',`nama_menu`='$nama_menu'
            WHERE `id_menu`='$id_menu'";
            echo "$sql";
            mysqli_query($koneksi,$sql);

            die("Error: The file does not exist.");
        }
        //hapus tag yang ada di db
        $sql_d = "delete from `tag_menu` where `id_menu`='$id_menu'";
        mysqli_query($koneksi,$sql_d);
        //tambah tag baru yang ada di post
        if(!empty($_POST['tag'])){
            foreach($_POST['tag'] as $id_tag){
            $sql_i = "insert into `tag_menu` (`id_menu`, `id_tag`) 
            values ('$id_menu', '$id_tag')";
            mysqli_query($koneksi,$sql_i);
            }
        }
        header("Location:index.php?include=menu&notif=editberhasil");
    }
}
?>
