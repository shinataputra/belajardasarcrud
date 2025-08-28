<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XI RPL 2</title>
    <!-- style tailwindcss -->
    


</head>

<body>
    <?php
    // Koneksi ke database
    include 'config.php';
    ?>
    <!-- form inputan -->
    <form action="prosesinput.php" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Kelas</label>
        <input type="text" name="kelas">
        <label>Alamat</label>
        <input type="text" name="alamat">
        <input type="submit" value="Kirim">
    </form>

    <!-- tampilkan data dari database -->

    <?php
    // query untuk mendapatkan data dari database
    $sql = "SELECT * FROM tbsiswa";
    $result = mysqli_query($koneksi, $sql);
    ?>

    <?php
    if (mysqli_num_rows($result) > 0): ?>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['nama']); ?></td>
                        <td><?= htmlspecialchars($row['kelas']); ?></td>
                        <td><?= htmlspecialchars($row['alamat']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    <?php else: ?>

        <p>Data tidak ditemukan</p>

    <?php endif; ?>


</body>

</html>