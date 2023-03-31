<?php
session_start();
 include "koneksi.php";
 
    if (isset($_SESSION['user']['level'])) {
        $where = "";
    } else {
    $where = " WHERE pembayaran.nisn=" . $_SESSION['user']['nisn'];
    }                    
?>
<table border="1" width="100%" cellpadding="5" cellspacing="0">
    <tr>
        <th colspan="9">
            <h2 style="margin:0;">Laporan Pembayaran SPP</h2>
        </th>
    </tr>
    <tr>
        <th>No</th>
        <th>Nama Petugas</th>
        <th>NISN</th>
        <th>Nama Siswa</th>
        <th>Tanggal Bayar</th>
        <th>Bulan Bayar</th>
        <th>Tahun Bayar</th>
        <th>SPP</th>
        <th>Jumlah Bayar</th>
    </tr>
        <?php
        $i=1; 
        $query = mysqli_query($koneksi, "SELECT * FROM pembayaran LEFT JOIN petugas on petugas.id_petugas = pembayaran.id_petugas LEFT JOIN siswa ON siswa.nisn = pembayaran.nisn LEFT JOIN spp ON spp.id_spp = pembayaran.id_spp");
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['nama_petugas']; ?></td>
                <td><?php echo $data['nisn']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['tgl_bayar']; ?></td>
                <td><?php echo $data['bulan_bayar']; ?></td>
                <td><?php echo $data['tahun_bayar']; ?></td>
                <td>RP. <?php echo number_format($data['nominal']); ?></td>
                <td>RP. <?php echo number_format($data['jumlah_bayar']); ?></td>
            </tr>
            <?php
            $i++;
        }
        ?>
</table>

<script type="text/javascript">
    window.print();
</script>