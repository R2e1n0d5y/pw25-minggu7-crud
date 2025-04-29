<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO user (nama, email, alamat, no_hp, jurusan) 
              VALUES ('$nama', '$email', '$alamat', '$no_hp', '$jurusan')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>CRUD 081</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>ADD</h2>
            <form action="" method="POST" class="form-input">
                <input type="text" name="nama" placeholder="Nama" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <textarea name="alamat" placeholder="Alamat" required></textarea><br>
                <input type="text" name="no_hp" placeholder="No HP" required><br>
                <input type="text" name="jurusan" placeholder="Jurusan" required><br>
                <button type="submit" name="submit">Simpan</button>
            </form>
        </div>
    </body>
</html>