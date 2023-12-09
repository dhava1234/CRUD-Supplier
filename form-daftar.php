<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier</title>
    <link rel="stylesheet" type="text/css" href="./css/form-daftar.css">
    <script>
        function validateForm() {
            var nama = document.forms["daftarForm"]["nama"].value;
            var alamat = document.forms["daftarForm"]["alamat"].value;

            if (nama == "" || alamat == "") {
                alert("Isi Semua Kolom yang ada !!!");
                return false;
            }
        }
    </script>
</head>

<body>
    <header>
        <h3>Penambahan Supplier</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST" name="daftarForm" onsubmit="return validateForm()">

        <fieldset>

        <p>
            <label for="nama">Nama Supplier: </label>
            <input type="text" name="nama" placeholder="Nama Supplier" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" placeholder="Alamat Lengkap"></textarea>
        </p>
        <p>
            <label for="jenis_supplier">Jenis Supplier: </label>
            <textarea name="jenis_supplier" placeholder="Jenis Supplier"></textarea>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

</body>
</html>