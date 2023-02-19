<?php
include('../config/config.php');
if(isset($_POST['daftar'])){
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
};
if(!empty($username)&& !empty($password)){
    $query = mysqli_query($connect, "INSERT INTO user(nama_user, username_user,password_user) VALUE ('$nama', '$username', '$password')");


    if($query){
        header('Location: ../insert/data_Users.php?status=sukses');
    }else{
        header('Location: form_regist.php?status=gagal');
    }
}

?>