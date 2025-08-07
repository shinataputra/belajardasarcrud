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
    if (!$koneksi){
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    ?>

    

    <!-- form inputan -->
    <form action="" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>

    <!-- get data dari form -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];        
    }

    // insert data ke database
    $sql = "INSERT INTO tbsiswa (nama) VALUES ('$nama')";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
    ?>

    
    


       
    
</body>
</html>