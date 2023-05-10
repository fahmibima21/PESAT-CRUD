<?php
if (isset($_POST['update'])) {
    require_once('../koneksi.php');
    $id = $_POST['id'];
    $jurusan = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "UPDATE kelas SET jurusan='$jurusan', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}