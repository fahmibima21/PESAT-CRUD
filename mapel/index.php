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
                    <span class="h1">WebPro - Mata Pelajaran</span>
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

        <div class="card">
            <div class="card-body">
                <div class="mb-2">
                    <span class="h2">Data Kelas</span>
                    <a href="tambah.php" class="btn btn-primary btn-sm" style="float: right;">Tambah</a>
                </div>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Mapel</th>
                            <th>Jam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once('../koneksi.php');
                        $sql = "SELECT * FROM mapel ORDER BY mapel ASC";
                        $result = mysqli_query($koneksi, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $no . "</td>";
                                echo "<td>" . $row['mapel'] . "</td>";
                                echo "<td>" . $row['jam'] . "</td>";
                                echo "<td>";
                                echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> &nbsp;";?>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus Mata Pelajaran dari list?!')">Hapus</a>
                                </td>
                                </tr>
                                <?php
                                $no++;
                            }
                        }
                        ?>
                    </tbody>
                    <tfoot class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Mapel</th>
                            <th>Jam</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>