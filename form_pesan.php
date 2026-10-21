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
            background-color: #2563eb;
            color: white;
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            border: none;
            font-size: 16px;
        }

        .back_btn{
            background-color: #6b6b6b;
            color: white;
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        input, textarea{
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 5px;
        }
    </style>
    </head>
<body>
    <div class="container">
        <h1>Form Pesan Mahasiswa</h1>
        <?php if (isset($_POST["kirim"])) : ?>
            <h1 style="textalign: center;">Halo <?php echo $_POST["nama"]; ?></h1>
        <?php endif; ?>

        <!-- catatan sementara perihal isset: -->
        <!-- 1. bakal  nampilin h1: Halo + (nama yang dimasukkan), hanya kalau tombol kirim udah di tekan -->
        <!-- 2. tapi karena form action ke halaman baru, h1-nya ga ke preview di halaman form_pesan.php ini -->
        <!-- 3. waktu issetnya diketik di halaman post_landingnya (hasil_pesan.php), h1-nya ke preview -->

        <!-- pertanyaan: perintah isset ini memang di bagian form-nya atau page landing pak? -->
        <!-- dan udah ikuti youtube (ngebuat isset-nya di halaman form), tapi tetap beralih ke halaman post_landingnya meski form-nya ga diisi). -->
        <!-- Need helpp pak.... buat tujuan si isset ini😭😭 -->
      
        <form action="hasil_pesan.php" method="POST">
            <b>Nama</b>
            <input type="text" name="nama">
            <br>
            <br>
            <b>Kelas</b>
            <input type="text" name="kelas">
            <br>
            <br>
            <b>Pesan / Kesan</b>
            <textarea name="pesan"></textarea>
            <br>
            <br>
            <button type="submit" name="kirim" class="btn">Kirim</button>
            <a href="index.php" class="back_btn">Kembali</a>
        </form>   
    </div>
</body>
</html>