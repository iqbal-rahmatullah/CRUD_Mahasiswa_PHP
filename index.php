<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./assets/logo.png" alt="Logo" width="50" class="d-inline-block align-text-center">
                CRUD DATA MAHASISWA
            </a>
        </div>
    </nav>


    <div class="container-fluid header mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
            </ol>
        </nav>
    </div>

    <div class="container-fluid px-4">
        <a class="btn btn-primary" href="tambah.php"><i class="bi bi-person-fill-add"></i> TAMBAH MAHASISWA</a>
        <br />
        <br />
        <div class="table-responsive">
            <table class="table table-hover border-bottom">
                <tr class="bg-warning">
                    <th>No</th>
                    <th>Nama</th>
                    <th>NRP</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                    <th>Email Student</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Asal Sekolah</th>
                    <th>Mata Kuliah Favorit</th>
                    <th>Hobi</th>
                    <th>Opsi</th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from mahasiswa");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nrp']; ?></td>
                        <td><?php echo $d['jenis_kelamin']; ?></td>
                        <td><?php echo $d['jurusan']; ?></td>
                        <td><?php echo $d['email_student']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['phone']; ?></td>
                        <td><?php echo $d['asal_sekolah']; ?></td>
                        <td><?php echo $d['mata_kuliah_favorit']; ?></td>
                        <td><?php echo $d['hobi']; ?></td>
                        <td>
                            <a class="btn btn-success mb-2" href="edit.php?id=<?php echo $d['id']; ?>"><i class="bi bi-pencil-fill"></i> EDIT</a>
                            <a class="btn btn-danger" onclick="buttonHapus(`hapus.php?id=<?php echo $d['id']; ?>`)"><i class="bi bi-eraser-fill"></i> HAPUS</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./assets/app.js"></script>
</body>

</html>