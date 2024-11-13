<?php
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_bekerja'];
    $totalGajiTahunan = 0;
    $nilai_kinerja = $_POST['nilai_kinerja']; 
    $totalBonus = 0;
    $totalTunjanganMasaKerja = 0;
    $totalPemotonganGaji = 0;

    // Assuming 'foto' is the key for the uploaded file
    $foto = $_FILES['foto']['name'];
    $targetDirectory = "uploads/";
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }
    $targetFile = $targetDirectory . basename($foto);
    move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile);

    switch ($jabatan) {
        case "Manager":
            $gajiPokok = 15000000;
            break;
        case "Supervisor":
            $gajiPokok = 10000000;
            break;
        case "Staff":
            $gajiPokok = 6000000;
            break;
    }
    $totalNilaiKinerja = 0;
    for ($i = 0; $i < 12; $i++) {
        $totalNilaiKinerja += $nilai_kinerja[$i];
    }
    $rataRataNilaiKinerja = $totalNilaiKinerja / 12;
    for ($i = 0; $i < 12; $i++) {
        $nilaiKinerjaBulan = $nilai_kinerja[$i];
        if ($nilaiKinerjaBulan > 85) {
            $bonus = $gajiPokok * 0.10;
        } else {
            $bonus = 0;
        }

        if ($lama_kerja > 5) {
            $tunjanganMasaKerja = 500000;
        } else {
            $tunjanganMasaKerja = 0;
        }

        if ($nilaiKinerjaBulan < 50) {
            $potongan = $gajiPokok * 0.05;
        } else {
            $potongan = 0;
        }

        $totalGajiTahunan += $gajiPokok;
        $totalBonus += $bonus;
        $totalTunjanganMasaKerja += $tunjanganMasaKerja;
        $totalPemotonganGaji += $potongan;
    }
    echo "<div class='result-card'>";
    echo "<img src='$targetFile' alt='Foto Karyawan'><br>";
    echo "<div class='box'><p class='bold'>Nama Karyawan:</p><p>$nama</p></div>";
    echo "<hr>";
    echo "<div class='box'><p class='bold'>Jabatan:</p><p>$jabatan</p></div>";
    echo "<hr>";
    echo "<div class='box'><p class='bold'>Lama Bekerja:</p><p>$lama_kerja tahun</p></div>";
    echo "<hr>";
    echo "<div class='box'><p class='bold'>Rata-rata Nilai Kinerja:</p><p class='highlight'>$rataRataNilaiKinerja</p></div>";
    echo "<hr>";
    echo "<div class='box'><p class='bold'>Total Gaji Tahunan:</p><p class='highlight'>Rp$totalGajiTahunan</p></div>";
    echo "<hr>";
    echo "<div class='box'><p class='bold'>Total Bonus:</p><p class='highlight'>Rp$totalBonus</p></div>";
    echo "<hr>";
    echo "<div class='box'><p class='bold'>Total Tunjangan Masa Kerja:</p><p class='highlight'>Rp$totalTunjanganMasaKerja</p></div>";
    echo "<hr>";
    echo "<div class='box'><p class='bold'>Total Pemotongan Gaji:</p><p class='highlight'>Rp$totalPemotonganGaji</p></div>";
    echo "<hr>";
    echo "<div class='box'><p class='bold'>Gaji Bersih Selama Setahun:</p><p class='highlight'>Rp" . ($totalGajiTahunan + $totalBonus + $totalTunjanganMasaKerja - $totalPemotonganGaji) . "</p></div>";
    echo "</div>";


    // echo "<img src='$targetFile' alt='Foto Karyawan' style='max-width:200px;'><br>";
    // echo "Nama Karyawan: $nama<br>";
    // echo "Jabatan: $jabatan<br>";
    // echo "Lama Bekerja: $lama_kerja tahun<br>";
    // echo "Rata-rata Nilai Kinerja: $rataRataNilaiKinerja<br>";
    // echo "Total Gaji Tahunan: Rp$totalGajiTahunan<br>";
    // echo "Total Bonus: Rp$totalBonus<br>";
    // echo "Total Tunjangan Masa Kerja: Rp$totalTunjanganMasaKerja<br>";
    // echo "Total Pemotongan Gaji: Rp$totalPemotonganGaji<br>";
    // echo "Gaji Bersih Selama Setahun: Rp" . ($totalGajiTahunan + $totalBonus + $totalTunjanganMasaKerja - $totalPemotonganGaji) . "<br>";
    
?>

