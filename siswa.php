<h1 class="h3 mb-3">Data Siswa</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="?page=siswa_tambah" class="btn btn-primary">+ Tambah Data</a><hr>
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </tr>
                            <?php
                            $i=1; 
                            $query = mysqli_query($koneksi, "SELECT * FROM siswa LEFT JOIN kelas ON siswa.id_kelas=kelas.id_kelas");
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $data['nisn']; ?></td>
                                    <td><?php echo $data['nis']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['nama_kelas']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['no_telepon']; ?></td>
                                    <td>
                                        <a href="?page=siswa_ubah&id=<?php echo $data['nisn'];?>" class="btn btn-warning">Ubah</a>
                                        <a href="?page=siswa_hapus&id=<?php echo $data['nisn'];?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>