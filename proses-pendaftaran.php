<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_supplier'];
    
    

    // buat query
    $sql = "INSERT INTO supplier (nama, alamat, jenis_supplier) VALUE ('$nama', '$alamat', '$jk')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-supplier.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-supplier.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>