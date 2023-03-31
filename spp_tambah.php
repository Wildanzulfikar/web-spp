<?php
    if (isset($_POST['tahun'])) {
        
        $tahun = $_POST['tahun'];
        $nominal = $_POST['nominal'];

        $query = mysqli_query($koneksi, "INSERT INTO spp(tahun,nominal) VALUES ('$tahun','$nominal')");

        if ($query) {
            echo '<script>alert("Tambah data berhasil")</script>';
        } else {
            echo '<script>alert("Tambah data gagal")</script>';
        }
    }
?>

<h1 class="h3 mb-3">Tambah Data Spp</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="?page=spp" class="btn btn-primary">Kembali</a><hr>
                    
                    <form method="post">
                        <table class="table">
                            <tr>
                                <td width="200">Tahun</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="text" name="tahun"></td>
                            </tr>
                            <tr>
                                <td width="200">Nominal</td>
                                <td width="1">:</td>
                                <td><input class="form-control" type="number" name="nominal"></td>
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