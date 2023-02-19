<?php 
include("../config/config.php");

$id = $_GET['id'];

$sql = "DELETE FROM matkul WHERE id = '$id'";

$query = mysqli_query($connect, $sql);
if ($query) {
    header('Location: ../view/home_matkul.php?status=sukses');
}else{
    die("Gagal menghapus data");
}


?>
