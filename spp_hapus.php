<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM spp WHERE id_spp=$id");
if ($query) {
    echo '<script>alert("Data berhasil dihapus"); location.href="index.php?=spp";</script>';
} else {
    echo '<script>alert("Data gagal dihapus"); location.href="index.php?=spp";</script>';
}
?>