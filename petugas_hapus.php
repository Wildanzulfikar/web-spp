<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus"); location.href="index.php?=petugas";</script>';
} else {
    echo '<script>alert("Data gagal dihapus"); location.href="index.php?=petugas";</script>';
}
?>