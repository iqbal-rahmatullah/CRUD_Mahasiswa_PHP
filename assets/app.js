const buttonHapus = (url) => {
  swal({
    title: "Apakah Kamu Yakin ?",
    text: "Data yang dihapus tidak akan bisa dikembalikan !!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      swal("Data Mahasiswa Berhasil Dihapus", {
        icon: "success",
      });
    }
    setTimeout(() => {
      window.replace(url);
    }, 2000);
  });
};
