<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./assets/logo.png" alt="Logo" width="50" class="d-inline-block align-text-center">
                CRUD DATA MAHASISWA
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active bg-primary text-white rounded-2" href="index.php"><i class="bi bi-houses-fill"></i> Home</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid header mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-white">
                <li class="breadcrumb-item" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Mahasiswa</li>
            </ol>
        </nav>
    </div>

    <div class="container my-4">
        <div class="container header_form"><i class="bi bi-person-fill-add px-2"></i>Form Tambah Mahasiswa</div>
        <div class="container py-3 form_input">
            <form method="post" action="tambah_aksi.php">
                <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="nama">Nama </label>
                        <input class="form-control" type="text" name="nama" id="nama" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="number">NRP </label>
                        <input class="form-control" type="text" name="nrp" id="nrp" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="jenis_kelamin">Jenis Kelamin </label>
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                            <option>Pilih Jenis Kelamin</option>
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="jurusan">Jurusan </label>
                        <input class="form-control" type="text" name="jurusan" id="jurusan" required>
                    </div>
                </div>

                <div class="row row_alamat">
                    <div class="col-6">
                        <label class="form-label" for="alamat">Alamat </label>
                        <textarea class="form-control" type="text" name="alamat" id="alamat" required></textarea>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="email_student">Email Student </label>
                        <input class="form-control" type="email" name="email_student" id="email_student" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="phone">No Hp </label>
                        <input class="form-control" type="number" name="phone" id="phone" required>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="asal_sekolah">Asal Sekolah </label>
                        <input class="form-control" type="text" name="asal_sekolah" id="asal_sekolah" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="mata_kuliah_favorit">Mata Kuliah Favorit </label>
                        <input class="form-control" type="text" name="mata_kuliah_favorit" id="mata_kuliah_favorit" required>
                    </div>
                    <div class="col-6"><label class="form-label" for="hobi">Hobi </label>
                        <input class="form-control" type="text" name="hobi" id="hobi" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-info mt-3 text-white px-4"><i class="bi bi-send-fill"></i> Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>