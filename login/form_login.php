<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
</html>
<form action="fungsi_login.php" method="POST">
<table class="table">
<fieldset>
<tr>
<td class="form-label"><label for="username">Nama</label></td>
<td>: <input class="input" type="text" name="nama" placeholder="Masukkan nama"/>
</td>
<tr>
<td class="form-label"><label for="username">Username</label></td>
<td>: <input class="input" type="text" name="username" placeholder="Masukan Usename"/>
</td>
</tr>
<tr>
<td class="form-label"><label for="password">Password</label></td>
<td class="td">: <input class="input" type="password" name="password"
placeholder="Masukkan Password"/>
</td>
</tr>
<!--bikin tombol daftar-->
<td colspan="2" >
<input style="background-color: #DDA0DD;" class="btn btn-sm" type="submit"
value="Login" name="masuk" />
<input style="background-color: #DDA0DD;" class="btn btn-sm" type="button"
value="Gak Jadi" onclick="window.location.href='../view/dosen.php'" /></td>
<!--bikin tombol kembali-->
<td></td>
</tr>
</fieldset>
</table>
</form>    
</body>
