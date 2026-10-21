<?php
    $mahasiswa = [
        [
            "nim" => "30001",
            "nama" => "Zamzam Banyak Tugas",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "zamzam@upi.edu",
            "nilai" => 50,
        ],
        [
            "nim" => "30002",
            "nama" => "Farel Tidak Tidur",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "farel@upi.edu",
            "nilai" => 100,
        ],
        [
            "nim" => "30003",
            "nama" => "Siti Sabar Ya",
            "jurusan" => "Sistem Telekomunikasi",
            "email" => "udah@upi.edu",
            "nilai" => 65,
        ],
        [
            "nim" => "30004",
            "nama" => "Carrent Besok UTS",
            "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
            "email" => "keren@upi.edu",
            "nilai" => 70,
        ],
        [
            "nim" => "30005",
            "nama" => "Putri Gedebag GedeBUG",
            "jurusan" => "Mekatronika dan Kecerdasan Buatan",
            "email" => "aquadulu@upi.edu",
            "nilai" => 100,
        ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PEMROGRAMAN DENGAN PHP</title>

    <!-- Sintaks Dasar untuk Style -->
    <style>
        body {
            background-color : #f3f4f6;
            font-family : Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 1210px;
            margin: 40px auto;
            padding: 15px 30px 30px 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 5px 10px black;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            background-color: #2563eb;
            color: white;
            padding: 8px 14px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="kiri">
                <h1>Daftar Mahasiswa</h1>
                <p>Mini Website PHP Dasar</p>
            </div>
            <a href="form_pesan.php" class="btn">Isi Form Pesan</a>
        </div>

        <div class="tabel">
            <table border="1" bordercolor="#ced7e0" cellspacing="0" cellpadding="12">
                <thead>
                    <tr style="background-color: #e6f0fa">
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php $no=1 ?>
                    <?php foreach($mahasiswa as $data): ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["nim"] ?></td>
                        <td><?php echo $data["nama"] ?></td>
                        <td><?php echo $data["jurusan"] ?></td>
                        <td><?php echo $data["email"] ?></td>                            <td><?php echo $data["nilai"] ?></td>
                        <td>
                            <?php
                                if($data["nilai"] >= 80) {
                                    echo $grade="A";
                                }else if($data["nilai"] >= 70) {
                                    echo $grade="B";
                                }else if($data["nilai"] >= 60) {
                                    echo $grade="C";
                                }else {
                                    echo $grade="D";
                                }
                            ?>
                        </td>

                        <!-- karena stylenya beda, lebih mudah kalay sintaks HTML di dalam PHP -->
                        <?php if($data["nilai"] >= 70) {  ?>
                            <td style="color: green; font-weight: bold;"><?php echo $status="Lulus"; ?></style>
                        <?php }else { ?>
                            <td style="color: red; font-weight: bold;"><?php echo $status="Tidak Lulus"; ?></style>
                        <?php } ?>

                        <td>
                            <a class="btn" href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?= $grade ?>&status=<?= $status ?>">Lihat Detail</a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

