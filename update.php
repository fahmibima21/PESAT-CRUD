<?php
    if (isset($_POST['simpan'])) {
        require_once('../koneksi.php');
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $asalsekolah = $_POST['asalsekolah'];
        $tempat_lahir = $_POST['tempatlahir'];
        $tangga_lahir = $_POST['tanggallahir']; 
        $kelas_id = $_POST['kelas_id'];

        $sql = "INSERT INTO siswa SET id='$id', nama='$nama', gender='$gender', asalsekolah='$asalsekolah', tempatlahir='$tempat_lahir', tanggallahir='$tanggal_lahir', kelas_id='$kelas_id'";    
        $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate');</script>";
        echo "<script>location='index.php';</script>";
        // var_dump($sql);
    }
}