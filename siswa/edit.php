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
        </nav>    <div class="container">
        <div class="row">
            <div class="col-6 h1">Edit Kelas</div>
            <div class="col-6"><a href="tambah.php" class="btn btn-outline btn-outline-info" style="float:right">Kembali</a></div>
        </div>
        <?php
                require_once('../koneksi.php');
                $id = $_GET['id'];
                $query = "SELECT * FROM siswa WHERE id = $id";
                $result = mysqli_query($koneksi, $query);
                $row = mysqli_fetch_assoc($result);
                ?>
                <form action="update.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="nama" value="<?= $row['nama']; ?>" class="form-control" placeholder="Nama Kelas*" aria-label="kelas" aria-describedby="basic-addon1" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="gender" value="<?= $row['gender']; ?>" class="form-control" placeholder="Jumlah Kapasitas Kelas" aria-label="kapasitas" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="asalsekolah" value="<?= $row['asalsekolah']; ?>" class="form-control" placeholder="Jumlah Siswa Terisi" aria-label="terisi" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="tempatlahir" value="<?= $row['tempatlahir']; ?>" class="form-control" placeholder="Jumlah Siswa Terisi" aria-label="terisi" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <input type="date" name="tanggallahir" value="<?= $row['tanggallahir']; ?>" class="form-control" placeholder="Jumlah Siswa Terisi" aria-label="terisi" aria-describedby="basic-addon1">
                    </div>
                    <div class="mb-2">
                <label for="">Pilih Kelas</label>
                <select name="jurusan" class="form-control">
                <option value="">Pilih Kelas</option>
                <?php
                include_once('../koneksi.php');
                $sql ="SELECT * FROM kelas";
                $query=mysqli_query($koneksi,$sql);
                while ($row = mysqli_fetch_assoc($query)) {
                    echo "<option value='$row[id]'>$row[jurusan]</option>";
                }
                ?>
                </select>
            </div>

                    <div class="input-group mb-3">
                        <input type="hidden" value="<?= $row['id']; ?>" name="id">
                        <input type="reset" class="btn btn-warning btn-sm">&nbsp;&nbsp;
                        <input type="submit" name="update" class="btn btn-primary btn-sm" value="Update">
                    </div>
                </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>