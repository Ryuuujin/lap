<!DOCTYPE html>
<html>
<head>
    <title>Hasil Rekap Nilai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="content">
        <h1>Hasil Rekap Nilai Peserta Didik</h1>
        <h3>SMK ADI SANGGORO</h3>
        <h3>TP. 2024/2025</h3>
    </div>
    <hr class="garis-tebal">

    <?php
    if (isset($_POST['konversi'])) {
        // Data Guru
        $gr = $_POST['gr'];
        $mapel = $_POST['mapel'];
        $kkm = $_POST['kkm'];
        $kelas = $_POST['kelas'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];

        // Map kelas value
        $kelas_name = $kelas == 1 ? "XII RPL 1" : "XII RPL 2";

        echo "<h2>Data Guru</h2>";
        echo "<p>Nama Guru: <strong>$gr</strong></p>";
        echo "<p>Mapel: <strong>$mapel</strong></p>";
        echo "<p>KKM: <strong>$kkm</strong></p>";
        echo "<p>Kelas: <strong>$kelas_name</strong></p>";

        echo "<hr class='garis-tebal'>";

        // Tabel Hasil Nilai
        echo "<h2>Rekap Nilai Peserta Didik</h2>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>
              </thead>
              <tbody>";

        $no = 1;
        $kompeten = 0;
        $tidak_kompeten = 0;

        foreach ($nis as $index => $nis_val) {
            $nama_val = $nama[$index];
            $nilai_val = $nilai[$index];
            $status = $nilai_val >= $kkm ? "Kompeten" : "Tidak Kompeten";

            if ($status == "Kompeten") {
                $kompeten++;
            } else {
                $tidak_kompeten++;
            }

            echo "<tr>
                    <td>$no</td>
                    <td>$nis_val</td>
                    <td>$nama_val</td>
                    <td>$nilai_val</td>
                    <td>$status</td>
                  </tr>";
            $no++;
        }

    }
    ?>
</div>
</body>
</html>