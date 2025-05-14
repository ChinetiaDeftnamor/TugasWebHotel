<?php
include "koneksi.php";

//form kamar
$idkamar = $_POST['idkamar'];
$cekin = $_POST['cekin'];
$cekout = $_POST['cekout'];
$harga = $_POST['harga'];
$totalharga = $_POST['totalharga'];

//data di kirim ke database/tabel
$querykamar = "INSERT INTO tbpembayaran (Id_Kamar, Cek_In, Cek_Out, Harga, Total_Harga) VALUES ('$idkamar','$cekin','$cekout','$harga','$totalharga')";

// Menjalankan query dan memeriksa keberhasilannya
if (mysqli_query($conn, $querykamar)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $querykamar . "<br>" . mysqli_error($conn);
}

//menutup koneksi
mysqli_close($conn);


