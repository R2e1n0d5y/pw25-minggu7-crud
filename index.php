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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    </head>
    <body>
        <div class="container">
            <h2>View Records</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM user";
                    $result = mysqli_query($conn, $query);
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>".$no++."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['alamat']."</td>
                            <td>".$row['no_hp']."</td>
                            <td>".$row['jurusan']."</td>
                            <td>
                                <a href='edit.php?id=".$row['id']."' class='edit-btn'>Update</a>
                                <a href='javascript:void(0);' onclick='confirmDelete(".$row['id'].")' class='delete-btn'>Delete</a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <a href="add.php" class ="add-btn" >Add</a>
        </div>
    <script src="script.js"></script>
    </body>
</html>