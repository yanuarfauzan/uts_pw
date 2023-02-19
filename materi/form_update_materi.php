
<?php
require_once "../layouts/header.php";
include("../config/config.php");

$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = mysqli_query($connect,"SELECT * FROM materi_pertemuan WHERE id = '$id'");
// $query = mysqli_query($sambung, $sql);
$tb_materi = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($sql) < 1 ){
die("data tidak ditemukan...");
}
?>
<div class="container mt-3">
    <div class="row">
        <div class="col">
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
                Form Update Materi
            </div>
            <div class="card-body">
                    <form action="fungsi_update_materi.php" method="POST" >
                        <div hidden="True">
                            <label for="id" class="form-label" >ID</label>
                            <input type="text" class="form-control" id="id" name="id">
                        </div>
                        <div>
                            <label for="pertemuan" class="form-label" >Pertemuan</label>
                            <input type="text" class="form-control" id="pertemuan" name="pertemuan" ?>">
                        </div>
                        <div >
                            <label for="judul" class="form-label" >Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul_materi" ?>">
                        </div>
                        <div>
                            <label for="matkul" class="form-label" >Matakuliah</label>
                            <input type="text" class="form-control" id="matkul" name="matkul" ?>">
                            </div>
                        <div class="mb-3">
                            <label for="isi_materi" class="form-label" >Isi Materi</label>
                            <input type="text" class="form-control" id="isi_materi" name="isi_materi" ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="edit_materi">Simpan</button>   <button type="submit" class="btn btn-danger" name="no_insert">Gajadi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>