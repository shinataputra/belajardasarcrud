
<?php
include 'config.php';

// insert databse table identitas
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    
}

// insert sql
$xirpl2 = "INSERT INTO identitas (nama) VALUES ('$nama')";

if (mysqli_query($conn, $xirpl2)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $xirpl2 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);