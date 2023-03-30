<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$email_student = $_POST['email_student'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];
$asal_sekolah = $_POST['asal_sekolah'];
$mata_kuliah_favorit = $_POST['mata_kuliah_favorit'];
$hobi = $_POST['hobi'];

echo $nama;

// update data ke database
$sql = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', email_student='$email_student', alamat='$alamat', phone='$phone', asal_sekolah='$asal_sekolah', mata_kuliah_favorit='$mata_kuliah_favorit', hobi='$hobi' WHERE id='$id'");

if ($sql) {
    header("location:index.php");
} else {
    echo "Gagal";
}

// mengalihkan halaman kembali ke index.php
//header("location:index.php");
