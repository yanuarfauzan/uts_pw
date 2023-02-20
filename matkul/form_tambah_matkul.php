<?php require_once('../layouts/header.php'); ?>
                    <div class="container mt-3">

                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Form Tambah Matkul
                            </div>
                                <div class="card-body">
                                    <form action="fungsi_tambah_matkul.php" method="POST" >
                                    <div>
                                        <label for="kodeMatkul" class="form-label" >Kode Matkul</label>
                                        <input type="text" class="form-control" id="kodeMatkul" name="kd_matkul">
                                    </div>
                                    <div >
                                        <label for="nama_matkul" class="form-label" >Mata Kuliah</label>
                                        <input type="text" class="form-control" id="nama_matkul" aria-describedby="emailHelp" name="nama_matkul">
                                    </div>
                                    <div class="mb-3">
                                        <label for="desk_matkul" class="form-label" >Deskripsi Mata Kuliah</label>
                                        <input type="text" class="form-control" id="desk_matkul" name="desk_matkul">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                                    <a href="../view/home_matkul.php"><button type="submit" class="btn btn-danger" name="tidak">Gajadi</button></a>
                                    </form>
                                </div>
                            </div>
                        </div>