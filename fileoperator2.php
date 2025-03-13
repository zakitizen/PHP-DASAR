

<?php 
$nama = "DAVID";
$prodi = "TEKNIK INFORMATIKA";
$tugas =80;
$uts = 90;
$uas = 85;
$nilai_akhir = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);
$rata_rata = ($tugas + $uts + $uas) / 3;
echo "<pre><h1>PROGRAM NILAI RATA-RATA MAHASISWA</h1></pre>";
echo "<hr>";
echo "Nama Mahasiswa = $nama<br>";
echo "Prodi = $prodi<br>";
echo "<hr>";
echo "Nilai Tugas = $tugas<br>";
echo "Nilai UTS = $uts<br>";
echo "Nilai UAS = $uas<br>";
echo "<hr>";
echo "Nilai Akhir = $nilai_akhir<br>";
echo "Rata-Rata = $rata_rata<br>";
echo "<hr>";


?>