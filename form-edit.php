<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-supplier.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM supplier WHERE id=$id";
$query = mysqli_query($db, $sql);
$supplier = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/form-daftar.css">
    <title>Formulir Edit Supplier | Toko Bang Tole</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Supplier</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $supplier['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $supplier['nama'] ?>" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $supplier['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis_supplier">Jenis Supplier: </label>
            <textarea name="jenis_supplier"><?php echo $supplier['jenis_supplier'] ?></textarea>
        </p>
        
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>