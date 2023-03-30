<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
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

// menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nrp','$jenis_kelamin', '$jurusan', '$email_student', '$alamat', '$phone', '$asal_sekolah', '$mata_kuliah_favorit', '$hobi')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
