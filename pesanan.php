<!DOCTYPE html>
<html lang="en">

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        padding: 20px;
        background-color: #f4f4f4;
    }

    form {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input {
        margin-bottom: 10px;
        padding: 8px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #28a745;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #218838;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
        background: white;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
</head>

<body>
    <form action="prosespesanan.php" method="POST">
        <label for="idkamar">ID Kamar : </label>
        <input type="text" id="idkamar" name="idkamar" placeholder="Id Kamar"><br>
        <label for="cekin">Cek in : </label>
        <input type="date" id="cekin" name="cekin" placeholder="Tanggal Cek In">
        <label for="cekout">Cek Out : </label>
        <input type="date" id="cekout" name="cekout" placeholder="Tanggal Cek Out">
        <label for="harga">Harga : </label>
        <input type="text" id="harga" name="harga" placeholder="Harga"><br>
        <label for="totalharga">Total Harga : </label>
        <input type="text" id="totalharga" name="totalharga" placeholder="Total Harga"><br>

        <br><button type="submit">Pesan</button>
</body>

</html>