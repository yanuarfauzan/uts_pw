<?php
include("../config/config.php");
if(isset($_POST['simpan'])){
    $id_matkul = $_POST['id_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $desk_matkul = $_POST['desk_matkul'];
    $kd_matkul = $_POST['kd_matkul'];
    
    $sql = "INSERT INTO matkul (id, kd_mk, mk, desk_mk) VALUE ('$id', '$kd_matkul', '$nama_matkul', '$desk_matkul')";
    
    $query = mysqli_query($connect, $sql);
    if( $query ) {
        header('location: ../view/home_matkul.php?status=sukses');
    }else if ($query){
        header('location: ../view/home_matkul.php?status=gagal');
    }else{
        die("Akses dilarang..");
    }
};
if(isset($_POST['tidak'])){
    header('Location: ../view/home_matkul.php?status=gagal');
}
?>
