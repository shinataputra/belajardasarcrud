<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <!-- Koneksi ke database -->
    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "dbsiswa");

    // cek koneksi
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    ?>
    <form action="" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Kelas</label>
        <input type="text" name="kelas">
        <label>Alamat</label>
        <input type="text" name="alamat">
        <input type="submit" value="Kirim">
    </form>

    <!-- get data dari form -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];

        // insert data ke database
        $sql = "INSERT INTO tbsiswa (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
        $result = mysqli_query($koneksi, $sql);

        // Tutup koneksi
        mysqli_close($koneksi);
    }
    ?>

</body>

</html>