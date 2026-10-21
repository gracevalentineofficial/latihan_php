<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        body {
            background-color : #f3f4f6;
            font-family : Arial, Helvetica, sans-serif;
        }

        .container {
            background-color: white;
            max-width: 700px;
            margin: 40px auto;
            padding: 15px 30px 30px 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 10px black;
        }

        .btn {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 8px 8px;
            text-decoration: none;
            border-radius: 10px;
        }

        li{
            background-color: #f2f5f5;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Detail Mahasiswa</h1>
        <ul style="list-style: none; padding: 0;">
            <li><b>NIM : </b><?= $_GET["nim"]?></li>
            <li><b>Nama : </b><?= $_GET["nama"]?></li>
            <li><b>Jurusan : </b><?= $_GET["jurusan"]?></li>
            <li><b>Email : </b><?= $_GET["email"]?></li>
            <li><b>Nilai : </b><?= $_GET["nilai"]?></li>
            <li><b>Grade : </b><?= $_GET["grade"]?></li>
            <li><b>Status : </b><?= $_GET["status"]?></li>
        </ul>
        <a href="index.php" class="btn">Kembali</a>
    </div>
</body>
</html>