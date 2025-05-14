<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form & Tabel Kamar</title>
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
    <form action="proseskamar.php" method="post">
        <label for="idkamar">ID Kamar:</label>
        <input type="text" id="idkamar" name="idkamar" placeholder="Masukan ID Kamar">

        <label for="nokamar">Nomor Kamar:</label>
        <input type="text" id="nokamar" name="nokamar" placeholder="Masukan Nomor Kamar">

        <label for="typekamar">Type Kamar:</label>
        <input type="text" id="typekamar" name="typekamar" placeholder="Masukan Type Kamar">

        <label for="lantai">Lantai:</label>
        <input type="text" id="lantai" name="lantai" placeholder="Masukan Lantai">

        <label for="fasilitas">Fasilitas:</label>
        <input type="text" id="fasilitas" name="fasilitas" placeholder="Masukan Fasilitas">

        <button type="submit">Pesan</button>
    </form>
</body>

</html>