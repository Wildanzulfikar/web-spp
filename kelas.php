<h1 class="h3 mb-3">Data Kelas</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="?page=kelas_tambah" class="btn btn-primary">+ Tambah Data</a><hr>
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Kompetensi Keahlian</th>
                            <th>Aksi</th>
                        </tr>
                            <?php
                            $i=1; 
                            $query = mysqli_query($koneksi, "SELECT * FROM kelas");
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $data['nama_kelas']; ?></td>
                                    <td><?php echo $data['kompetensi_keahlian']; ?></td>
                                    <td>
                                        <a href="?page=kelas_ubah&id=<?php echo $data['id_kelas'];?>" class="btn btn-warning">Ubah</a>
                                        <a href="?page=kelas_hapus&id=<?php echo $data['id_kelas'];?>" class="btn btn-danger">Hapus</a>
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