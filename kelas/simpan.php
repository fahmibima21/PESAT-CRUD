<?php
if (isset($_POST['simpan'])) {
    include_once('../koneksi.php');
    $jurusan = $_POST['jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql="INSERT INTO kelas SET jurusan='$jurusan',kapasitas='$kapasitas',terisi='$terisi'";
    $query = mysqli_query($koneksi , $sql);
    if ($query) {
        header("location: index.php");
    } else {
        include "tambah.php";
        echo "<script language='JavaScript'>";
        echo "alert ('Data Gagal Ditambahkan')";
        echo "</script>";
    }
    
} else {
    echo "JANGAN akses langsung kemari, cek melalui <a href= 'tambah.php'>form</a>";
}