<?php 
$nama = "RUDI";
$prodi = "TEKNIK INFORMATIKA";
$tugas = 80;
$uts = 85;
$uas = 75;
$nilai_akhir = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);

$indeks_nilai = ""; // Variabel untuk menyimpan indeks nilai

if ($nilai_akhir >= 80) {
    $indeks_nilai = "A";
} elseif ($nilai_akhir >= 70) {
    $indeks_nilai = "B";
} elseif ($nilai_akhir >= 60) {
    $indeks_nilai = "C";
} elseif ($nilai_akhir >= 50) {
    $indeks_nilai = "D";
} else {
    $indeks_nilai = "E";
}

echo "<pre><h1>PROGRAM INDEKS NILAI MAHASISWA</h1></pre>";
echo "<hr>";
echo "Nama Mahasiswa = $nama<br>";
echo "Prodi = $prodi<br>";
echo "Tugas = $tugas<br>";
echo "UTS = $uts<br>";
echo "UAS = $uas<br>";
echo "<hr>";
echo "Nilai Akhir = $nilai_akhir<br>";
echo "Indeks Nilai = $indeks_nilai<br>";
?>