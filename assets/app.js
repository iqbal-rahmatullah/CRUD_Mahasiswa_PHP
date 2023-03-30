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
        text: "Redirecting in 2 sec...",
        buttons: false,
      });
      setTimeout(() => {
        window.location.replace(url);
      }, 2000);
    }
  });
};
