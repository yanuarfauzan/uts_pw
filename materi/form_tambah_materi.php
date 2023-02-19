<?php require_once "../layouts/header.php" ?>
<div class="container mt-3">
    <div class="row">
        <div class="col">
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
                Form Tambah Materi
            </div>
            <div class="card-body">
                    <form action="fungsi_tambah_materi.php" method="POST" >
                        <div hidden="True">
                            <label for="id" class="form-label" >ID</label>
                            <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name="id">
                        </div>
                        <div>
                            <label for="pertemuan" class="form-label" >Pertemuan</label>
                            <input type="text" class="form-control" id="pertemuan" name="pertemuan">
                        </div>
                        <div >
                            <label for="judul" class="form-label" >Judul</label>
                            <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" name="judul_materi">
                        </div>
                        <div class="mb-3">
                            <label for="isi_materi" class="form-label" >Isi Materi</label>
                            <input type="text" class="form-control" id="isi_materi" name="isi_materi">
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="insert_materi">Tambah</button>   <button type="submit" class="btn btn-danger" name="no_insert">Gajadi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>