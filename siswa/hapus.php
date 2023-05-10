<?php
if (isset($_GET['id'])) {
    require_once('../koneksi.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM siswa WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}
