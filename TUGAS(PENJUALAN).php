<?php 
    $namabarang="Laptop";
    $harga= 5000000;
    $jumlah=2;
    $total=$harga * $jumlah;
    $diskon=0.1 * $total;
    $bayar=$total - $diskon;
    echo "<pre><h1><center>PROGRAM PENJUALAN BARANG</h1></pre>";
    echo "<center>========================================<br>";
    echo "<center>Nama Barang = $namabarang<br>";
    echo "<center>Harga Barang = $harga<br>";
    echo "<center>Jumlah Barang = $jumlah<br>";
    echo "<center>>========================================<br>";
    echo "<center>Total Harga = $total<br>";
    echo "<center>Diskon 10% = $diskon<br>";
    echo "<center>========================================<br>";
    echo "<center>Total Bayar = $bayar<br>";
    echo "<h2><center>TERIMA KASIH</h2>";



?>