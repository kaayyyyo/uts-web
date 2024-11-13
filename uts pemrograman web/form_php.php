<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$gender = $_POST['gender'];
$agama = $_POST['agama'];
$ekskul = implode(", " , $_POST['ekskul']);
$alamat = $_POST['alamat'];

echo "Nama: $nama<br>";
echo "NIM: $nim<br>";
echo "Gender: $gender<br>";
echo "Agama: $agama<br>";
echo "Ekskul: $ekskul<br>";
echo "Alamat: $alamat<br>";

echo "<button type='button' onclick='window.location.href=\"penilaian_karyawan.html\";'>Next</button>";
?>
