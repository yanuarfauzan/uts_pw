<?php
include("../config/config.php");
if(isset($_POST['edit'])){
    $id_matkul = $_POST['id_matkul'];
    $kd_matkul = $_POST['kode_matkul'];
    $nm_matkul = $_POST['nama_matkul'];
    $desk_matkul = $_POST['desk_matkul'];

    $sql = "UPDATE matkul SET 
            kd_mk='$kd_matkul', 
            mk='$nm_matkul', 
            desk_mk='$desk_matkul' 
            WHERE id='$id_matkul'";
    $query = mysqli_query($connect, $sql);
    if( $query ) {
        header('location: ../view/home_matkul.php?status=sukses');
    }else{
        die("Gagal menyimpan perubahan...");
    }
}elseif(isset($_POST['no_edit'])){
    header('Location: ../view/home_matkul.php');
}else{
    die("Akses dilarang..");
};

?>