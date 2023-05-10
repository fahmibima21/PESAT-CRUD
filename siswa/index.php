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
            <div class="col-6 h1">Data Kelas</div>
            <div class="col-6"><a href="tambah.php" class="btn btn-primary" style="float:right">Tambah</a></div>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Kelas</th>
                    <th>Asal Sekolah</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <?php
            include('../koneksi.php');
            $sql = "SELECT kelas.id as kid, kelas.jurusan, siswa.id as sid, siswa.nama, siswa.gender, siswa.kelas_id, siswa.asalsekolah, siswa.tempatlahir, siswa.tanggallahir
            FROM siswa JOIN kelas ON kelas.id=siswa.kelas_id";
            $query = mysqli_query($koneksi, $sql);
            echo "<tbody>";
            if (mysqli_num_rows($query) == 0) {
                echo "<td colspan=5 align='center'>Data Kosong</td>";
            } else {
                $no = 1;
                while ($r = mysqli_fetch_assoc($query)) {
                    echo "<td>$no</td>";
                    echo "<td>" . $r['nama'] . "</td>";
                    echo "<td>" . $r['gender'] . "</td>";
                    echo "<td>" . $r['kelas_id'] . "</td>";
                    echo "<td>" . $r['asalsekolah'] . "</td>";
                    echo "<td>" . $r['tempatlahir'] . "</td>";
                    echo "<td>" . $r['tanggallahir'] . "</td>";
                    echo '<td><a href="edit.php?id='.$r['sid'].'" class="btn btn-warning btn-sm">Edit</a> |
                    <a href="hapus.php?id='.$r['sid'].'"onclick="return confirm(\'Yakin akan dihapus?\')" class="btn btn-danger btn-sm">Hapus</a></td>';
                    echo "<tr>";
                    $no++;
                }
            }


            ?>
            </tr>
            </tbody>
        </table>
    </div>
</body>

</html>