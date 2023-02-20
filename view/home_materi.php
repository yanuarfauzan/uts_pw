<?php require_once '../layouts/header.php';
include("../config/config.php");
include("../materi/fungsi_tambah_materi.php");
$jumPerHal = 3;
$query = mysqli_query($connect, "SELECT * FROM materi_pertemuan");
$jumData = mysqli_num_rows($query);                                        
$jumHal = ceil($jumData / $jumPerHal);
$halAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumPerHal * $halAktif) - $jumPerHal;
$sql = "SELECT * FROM materi_pertemuan LIMIT $awalData, $jumPerHal";
$query = mysqli_query($connect, $sql);
$nomor = 1;
?>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Materi Kuliah
                            </div>
                            <div class="card-body">
                                <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <?php if($halAktif > 1) : ?>
                                        <li class="page-item"><a class="page-link" href="?halaman=<?= $halAktif - 1; ?>">Previous</a></li>        
                                    <?php endif; ?>
                                    
                                    <?php for($i = 1; $i < $jumHal; $i++) : ?>
                                        <?php if($i == $halAktif) : ?>
                                            <li class="page-item <?= "active" ?>"><a class="page-link" href="?halaman=<?= $i ?>"><?= $i; ?></a></li>
                                        <?php else : ?>
                                            <li class="page-item"><a class="page-link" href="?halaman=<?= $i ?>"><?= $i; ?></a></li>
                                        <?php endif; ?>
                                        <?php endfor; ?>

                                    <?php if($halAktif < $jumHal) : ?>
                                    <li class="page-item"><a class="page-link" href="?halaman=<?= $halAktif + 1; ?>">Next</a></li>
                                    <?php endif; ?>
                                </ul>
                                </nav>
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
                            
                            
