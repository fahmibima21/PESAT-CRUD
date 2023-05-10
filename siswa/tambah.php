<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="gambar/DSC_1386.JPG" type="image/x-icon">
    <title>Aplikasi Nilai</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href=".">
                    <img src="../gambar/DSC_1386.JPG" height="74px" class="d-inline-block align-text-center">
                    <span class="h1">WebPro - Aplikasi Nilai</span>
                </a>
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href=".">Home</a>
                            <a class="nav-link" href="kelas">Kelas</a>
                            <a class="nav-link" href="siswa">Siswa</a>
                            <a class="nav-link" href="mapel">Mapel</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="col-6 h1">Tambah Siswa</div>
            <div class="col-6"><a href="../siswa/" class="btn btn-outline btn-outline-info" style="float:right">Kembali</a></div>
        </div>

        <form action="simpan.php" method="post">
            <div class="mb-2">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">Gender</label>
                <input type="text" name="gender" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">Asal Sekolah</label>
                <input type="text" name="asalsekolah" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tempatlahir" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tanggallahir" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">Pilih Kelas</label>
                <select name="jurusan" class="form-control">
                <option value="">Pilih Kelas</option>
                <?php
                include_once('../koneksi.php');
                $sql ="SELECT * FROM `kelas` ORDER BY `kelas`.`jurusan`";
                $query=mysqli_query($koneksi,$sql);
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<option value='$row[id]'>$row[jurusan]</option>";
                }
                ?>
                </select>
            </div>
            <div class="mb-2">
                <input type="reset" class="btn btn-warning">
                <input type="submit" value="Simpan" class="btn btn-primary" name= "simpan">
            </div>
        </form>

    </div>
</body>

</html>