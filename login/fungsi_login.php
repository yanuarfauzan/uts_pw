<?php
include('../config/config.php');
if(isset($_POST['masuk'])){
$nama_user = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
};
if(!empty($username)&& !empty($password)){
    $query = mysqli_query($connect, "SELECT * FROM user WHERE nama_user = '$nama_user' and username_user = '$username' and password_user = '$password'");
    $result = mysqli_num_rows($query);
    

    if($result>0){
        header('Location: ../insert/data_Users.php?status=sukses');
    }else{
        header('Location: form_login.php?status=gagal');
    }
}

?>