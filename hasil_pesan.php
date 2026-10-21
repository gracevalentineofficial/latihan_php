<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Method POST</title>

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
            border-radius: 5px;
            text-decoration: none;
            padding: 8px 14px;
        }

        li{
            background-color: #f9fafb;
            padding: 12px;
            margin-bottom: 8px;
            border-radius: 5px;
        }
    </style>
</head>

<body>  
    <div class="container">
        <h1>Pesan Berhasil Dikirim</h1>
        <p>Terima Kasih, <b><?= $_POST["nama"] ?></b> !</p>
        <ul style="list-style: none; padding: 0;">
            <li><b>Nama :</b> <?= $_POST["nama"] ?> </li>
            <li><b>Kelas :</b> <?= $_POST["kelas"] ?> </li>
            <li><b>Pesan / Kesan:</b> <?= $_POST["pesan"] ?> </li>
        </ul>
        <a href="index.php" class="btn">Kembali ke Data Mahasiswa</a>
    </div>
</body>
</html>