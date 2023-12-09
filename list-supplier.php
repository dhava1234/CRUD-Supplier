<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Supplier Toko</title>
    <link rel="stylesheet" type="text/css" href="./css/liste.css">
</head>

<body>
    <header>
        <h3>Daftar Supplier Toko Bang Tole</h3>
    </header>

    <nav>
        <a href="form-daftar.php">Tambah Baru [+] </a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>Jenis Supplier</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM supplier";
        $query = mysqli_query($db, $sql);

        while($supplier = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$supplier['id']."</td>";
            echo "<td>".$supplier['nama']."</td>";
            echo "<td>".$supplier['alamat']."</td>";
            echo "<td>".$supplier['jenis_supplier']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$supplier['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$supplier['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>