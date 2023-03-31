<?php

if (isset($_POST['id_petugas'])) {
    $id_petugas = $_POST['id_petugas'];
    $nisn = $_POST['nisn'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $id_spp = $_POST['id_spp'];
    $jumlah_bayar = $_POST['jumlah_bayar'];
    $bulan_bayar = $_POST['bulan_bayar'];
    $tahun_bayar = $_POST['tahun_bayar'];

    $query = mysqli_query($koneksi, "INSERT INTO pembayaran(id_petugas,nisn,tgl_bayar,id_spp,jumlah_bayar,bulan_bayar,tahun_bayar) VALUES ('$id_petugas','$nisn','$tgl_bayar','$id_spp','$jumlah_bayar','$bulan_bayar','$tahun_bayar')");

    if ($query) {
        echo "<script>alert('Entri pembayaran Berhasil')</script>";
    } else {
        echo "<script>alert('Entri pembayaran Gagal')</script>";
    }
}

?>

<h1 class="h3 mb-3">Entri Data Pembayaran</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <table class="table">
                            <tr>
                                <td width="200">Petugas</td>
                                <td width="1">:</td>
                                <td>
                                    <select name="id_petugas" class="form-select">
                                        <?php
                                            $p = mysqli_query($koneksi, "SELECT * FROM petugas");
                                            while ($petugas = mysqli_fetch_array($p)) {
                                                ?>
                                                <option value="<?php echo $petugas['id_petugas']?>"><?php echo $petugas['nama_petugas']?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="200">Siswa</td>
                                <td width="1">:</td>
                                <td>
                                    <select name="nisn" class="form-select">
                                        <?php
                                            $p = mysqli_query($koneksi, "SELECT * FROM siswa");
                                            while ($siswa = mysqli_fetch_array($p)) {
                                                ?>
                                                <option value="<?php echo $siswa['nisn']?>"><?php echo $siswa['nama']?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="200">Tanggal bayar</td>
                                <td width="1">:</td>
                                <td>
                                    <input type="date" name="tgl_bayar" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width="200">Bulan bayar</td>
                                <td width="1">:</td>
                                <td>
                                    <select name="bulan_bayar" class="form-select">
                                        <option>Januari</option>
                                        <option>Februari</option>
                                        <option>Maret</option>
                                        <option>April</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                        <option>Agustus</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>Desember</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td width="200">Tahun bayar</td>
                                <td width="1">:</td>
                                <td>
                                    <input type="number" name="tahun_bayar" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width="200">SPP</td>
                                <td width="1">:</td>
                                <td>
                                    <select name="id_spp" class="form-select">
                                        <?php
                                            $p = mysqli_query($koneksi, "SELECT * FROM spp");
                                            while ($spp = mysqli_fetch_array($p)) {
                                                ?>
                                                <option value="<?php echo $spp['id_spp']?>"><?php echo number_format($spp['nominal']) . '('.$spp['tahun'].')'; ?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td width="200">Jumlah bayar</td>
                                <td width="1">:</td>
                                <td>
                                    <input type="number" name="jumlah_bayar" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width="200"></td>
                                <td width="1"></td>
                                <td>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>