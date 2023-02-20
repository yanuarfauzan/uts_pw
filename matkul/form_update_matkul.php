<?php
require_once('../layouts/header.php');
include("../config/config.php");
$id = $_GET['id'];
$sql = mysqli_query($connect, "SELECT * FROM matkul WHERE id = '$id'");
$tb_matkul = mysqli_fetch_assoc($sql);
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>
                <div class="container mt-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Form Edit Matkul
                        </div>
                        <div class="card-body">                                           
                                    <form action="fungsi_update_matkul.php" method="POST">
                                        <div hidden="true">
                                            <label for="kodeMatkul">Id: </label>
                                            <input type="text" class="form-control" name="id_matkul" value="<?php echo $tb_matkul['id'] ?>" />
                                        </div>
                                        <div>
                                            <label for="kodeMatkul">Kode Matkul: </label>
                                            <input type="text" class="form-control" name="kode_matkul" value="<?php echo $tb_matkul['kd_mk'] ?>" />
                                        </div>
                                            <label for="matkul">Mata Kuliah : </label>
                                            <input type="text" class="form-control" name="nama_matkul" placeholder="nama matkul" value="<?php echo $tb_matkul['mk'] ?>" />
                                        <div class="mb-3">
                                            <label for="deskMk">Deskripsi Matakuliah : </label>
                                            <textarea name="desk_matkul" class="form-control"><?php echo $tb_matkul['desk_mk'] ?></textarea>
                                        </div>
                                            <button class="btn btn-primary" name="edit">Simpan</button> <button class="btn btn-danger" name="no_edit">Gajadi</button>
                                </form>
                                <br>
                            </div>