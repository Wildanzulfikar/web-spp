<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM siswa WHERE nisn=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus"); location.href="index.php?=siswa";</script>';
} else {
    echo '<script>alert("Data gagal dihapus"); location.href="index.php?=siswa";</script>';
}
?>