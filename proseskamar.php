<?php
include "koneksi.php";

//form kamar
$idkamar = $_POST['idkamar'];
$nokamar = $_POST['nokamar'];
$type = $_POST['typekamar'];
$fasilitas = $_POST['fasilitas'];
$lantai = $_POST['lantai'];

//data di kirim ke database/tabel
$querykamar = "INSERT INTO tbkamar (Id_Kamar, No_Kamar, Type_Kamar, Lantai, Fasilitas) VALUES ('$idkamar','$nokamar','$type','$fasilitas','$lantai')";

// Menjalankan query dan memeriksa keberhasilannya
if (mysqli_query($conn, $querykamar)) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Error: " . $querykamar . "<br>" . mysqli_error($conn);
}

//menutup koneksi
mysqli_close($conn);


?>