<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM pembayaran WHERE id_pembayaran=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus"); location.href="index.php?=history";</script>';
} else {
    echo '<script>alert("Data gagal dihapus"); location.href="index.php?=history";</script>';
}
?>