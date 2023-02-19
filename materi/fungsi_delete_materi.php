<?php 
include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM materi_pertemuan WHERE id = '$id'";

$query = mysqli_query($connect, $sql);
if ($query) {
    header('Location: ../view/home_materi.php?status=sukses');
}else{
    die("Gagal menghapus data");
}


?>