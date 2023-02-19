<?php
include('../config/config.php');
if(isset($_POST['insert_materi'])){
    $id_matkul = $_POST['id'];
    $pertemuan = $_POST['pertemuan'];
    $judul_materi = $_POST['judul_materi'];
    $isi_materi = $_POST['isi_materi'];
    $matkul = $_POST['matkul'];
$sql = ("INSERT INTO materi_pertemuan (id, pertemuan, judul, isi, matkul) VALUE ('$id_matkul', '$pertemuan','$judul_materi', '$isi_materi', '$matkul')");
$query = mysqli_query($connect, $sql);

if( $query ) {
    header('location: ../view/home_materi.php?status=sukses');
}else if ($query){
    header('location: ../view/home_materi.php?status=gagal');
}else{
    die("Akses dilarang..");
}
};
if(isset($_POST['no_insert'])){
    header('location: ../view/home_materi.php?status=gagal');
}
    
?>