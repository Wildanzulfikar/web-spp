<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus"); location.href="index.php?=kelas";</script>';
} else {
    echo '<script>alert("Data gagal dihapus"); location.href="index.php?=kelas";</script>';
}
?>