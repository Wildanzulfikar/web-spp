<?php
    if (isset($_POST['nama_kelas'])) {
        
        $nama_kelas = $_POST['nama_kelas'];
        $kompetensi_keahlian = $_POST['kompetensi_keahlian'];

        $query = mysqli_query($koneksi, "INSERT INTO kelas(nama_kelas,kompetensi_keahlian) VALUES ('$nama_kelas','$kompetensi_keahlian')");

        if ($query) {
            echo '<script>alert("Tambah data berhasil")</script>';
        } else {
            echo '<script>alert("Tambah data gagal")</script>';
        }
    }
?>

<h1 class="h3 mb-3">Tambah Data Kelas</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="?page=kelas" class="btn btn-primary">Kembali</a><hr>
                    
                    <form method="post">
                        <table class="table">
                            <tr>
                                <td width="200">Nama Kelas</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="nama_kelas"></td>
                            </tr>
                            <tr>
                                <td width="200">Kompetensi Keahlian</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="kompetensi_keahlian"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><button type="submit" class="btn btn-success">Submit</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>