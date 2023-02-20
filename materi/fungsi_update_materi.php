<?php
include("../config/config.php");
if(isset($_POST['edit_materi'])){
    $pertemuan = $_POST['pertemuan'];
    $judul = $_POST['judul_materi'];
    $isi = $_POST['isi_materi'];
    $matkul = $_POST['matkul'];
    $id_materi = $_POST['id'];
    $sql = ("UPDATE materi_pertemuan SET pertemuan='$pertemuan', judul='$judul', isi='$isi', matkul='$matkul' WHERE id='$id_materi'");
    $query = mysqli_query($connect, $sql);
    if($query) {
        header('location: ../view/home_materi.php?status=sukses');
    }else{
        die("Gagal menyimpan perubahan...");
    }
}elseif(isset($_POST['no_edit'])){
    header('Location: ../view/home_materi.php');
}else{
    die("Akses dilarang..");
};

?>