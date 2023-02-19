<?php require_once '../layouts/header.php'; ?>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Materi Kuliah
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="tr">
                                            <th class="satu">No</th>
                                            <th>Pertemuan</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>matkul</th>
                                            <th>Mau Diapain</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../config/config.php");
                                        include("../materi/fungsi_tambah_materi.php");
                                        $sql = "SELECT * FROM materi_pertemuan";
                                        $query = mysqli_query($connect, $sql);
                                        $nomor = 1;
                                        while($tb_materi = mysqli_fetch_array($query)){
                                        echo "<tr>";
                                        echo "<td>".$nomor."</td>";
                                        echo "<td>".$tb_materi['pertemuan']."</td>"; 
                                        echo "<td>".$tb_materi['judul']."</td>";
                                        echo "<td>".$tb_materi['isi']."</td>";
                                        echo "<td>".$tb_materi['matkul']."</td>";
                                        echo "<td hidden>".$tb_materi['id']."</td>";
                                        echo "<td>";
                                        echo "<a
                                        href='../materi/form_update_materi.php?id=". $tb_materi['id']."' class='btn btn-primary'>Edit</a>";
                                        echo "<a
                                        href='../materi/fungsi_delete_materi.php?id=". $tb_materi['id']."' class='btn btn-danger'>Hapus</a> ";
                                        echo "</td>";
                                        echo "</tr>";
                                        $nomor++;
                                        }
                                        ?>
                                        </tbody>
                                        </table>
                                        <a href="../materi/form_tambah_materi.php" class="btn btn-primary float-right">Tambah</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                            
