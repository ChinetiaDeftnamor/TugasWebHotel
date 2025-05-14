<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "INSERT INTO user (nama, username, password, level) VALUES ('$nama', '$username', '$password', '$level')";

    if (mysqli_query($conn, $sql)) {
        echo "Registrasi berhasil! <a href='beranda_user.php'>ke beranda</a>";
    } else {
        echo "Gagal mendaftar: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <label>Nama : </label>
    <input type="text" name="nama" placeholder="Nama" required><br>
    <label>Username : </label>
    <input type="text" name="username" placeholder="Username" required><br>
    <label>Password : </label>
    <input type="password" name="password" placeholder="Password" required><br>
    <label>Level : </label>
    <select name="level">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select><br>
    <button type="submit" name="submit">Daftar</button>
</form>