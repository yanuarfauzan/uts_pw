<?php require_once '../layouts/header.php'; ?>
                    <div class="container mt-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Mata Kuliah
                            </div>
                            <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr class="tr">
                                                <th class="satu">No</th>
                                                <th>Kode Matkul</th>
                                                <th>Mata Kuliah</th>
                                                <th>Deskripsi Matakuliah</th>
                                                <th>Mau Diapain</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include("../config/config.php");
                                            include("../matkul/fungsi_tambah_matkul.php");
                                            $sql = "SELECT * FROM matkul";
                                            $query = mysqli_query($connect, $sql);
                                            $nomor = 1;
                                            while($tb_Matkul = mysqli_fetch_array($query)){
                                            echo "<tr>";
                                            echo "<td>".$nomor."</td>";
                                            echo "<td hidden>".$tb_Matkul['id']."</td>";
                                            echo "<td>".$tb_Matkul['kd_mk']."</td>"; 
                                            echo "<td>".$tb_Matkul['mk']."</td>";
                                            echo "<td>".$tb_Matkul['desk_mk']."</td>"; 
                                            echo "<td>";
                                            echo "<div>";
                                            echo "<a
                                            href='../matkul/form_update_matkul.php?id=". $tb_Matkul['id']."' class='btn btn-primary'>Edit</a>";
                                            echo "</div>";
                                            echo "<div>";
                                            echo "<a
                                            href='../matkul/fungsi_delete_matkul.php?id=". $tb_Matkul['id']."' class='btn btn-danger'>Hapus</a> ";
                                            echo "</div>";
                                            echo "</td>";
                                            echo "</tr>";
                                            $nomor++;
                                            }
                                            ?>
                                        </tbody>
                                        </table>
                                        <a href="../matkul/form_tambah_matkul.php"><button  class="btn btn-primary">Tambah Matakuliah</button></a>
                                    </div>
                                </div>
                            </div>


