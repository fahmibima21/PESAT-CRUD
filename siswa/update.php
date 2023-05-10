<?php
    if (isset($_POST['update'])) {
        require_once('../koneksi.php');
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $kelas_id = $_POST['jurusan'];
        $asalsekolah = $_POST['asalsekolah'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir']; 

        $sql = "UPDATE siswa SET nama='$nama', gender='$gender', kelas_id='$kelas_id', asalsekolah='$asalsekolah', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir'";
        $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header("location: index.php");
    } else {
        include "tambah.php";
        echo "<script language='JavaScript'>";
        echo "alert ('Data Gagal Ditambahkan')";
        echo "</script>";
    }
}