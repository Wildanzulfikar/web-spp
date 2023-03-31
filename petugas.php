<h1 class="h3 mb-3">Data Petugas</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="?page=petugas_tambah" class="btn btn-primary">+ Tambah Data</a><hr>
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                            <?php
                            $i=1; 
                            $query = mysqli_query($koneksi, "SELECT * FROM petugas");
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $data['nama_petugas']; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['level']; ?></td>
                                    <td>
                                        <a href="?page=petugas_ubah&id=<?php echo $data['id_petugas'];?>" class="btn btn-warning">Ubah</a>
                                        <a href="?page=petugas_hapus&id=<?php echo $data['id_petugas'];?>" class="btn btn-danger">Hapus</a>
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