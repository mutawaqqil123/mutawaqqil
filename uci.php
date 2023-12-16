<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transaksi Belanja</title>
</head>

<body>
    <h1>Transaksi Belanja</h1>
    <form action="" method="post">
        <table border="1">
            <tr>
                <th>No. Transaksi</th>
                <td><input type="text" name="no_transaksi"></td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <td><input type="text" name="nama_pembeli"></td>
            </tr>
            <tr>
                <th>judul buku</th>
                <td><input type="text" name="judul_buku"></td>
            </tr>
            <tr>
                <th>jumlah buku</th>
                <td><input type="text" name="jumlah_buku"></td>
            </tr>
            <tr>
                <th>harga buku</th>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Ambil data dari form
$no_transaksi = $_POST['no_transaksi'];
$nama_pembeli = $_POST['nama_pembeli'];
$judul_buku = $_POST['judul_buku'];
$jumlah_buku = $_POST['jumlah_buku'];
$harga = $_POST['harga'];

// Hitung diskon belanja
$diskon_belanja = $harga * 0.1;

// Hitung diskon transaksi
$diskon_transaksi = $harga * 0.05;

// Hitung total bayar
$total_bayar = $harga - $diskon_belanja - $diskon_transaksi;

// Tampilkan data transaksi
echo "<h1>Transaksi Belanja</h1>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>No. Transaksi</th>";
echo "<td>{$no_transaksi}</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Nama Pembeli</th>";
echo "<td>{$nama_pembeli}</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Judul Buku</th>";
echo "<td>{$judul_buku}</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Jumlah Buku</th>";
echo "<td>{$jumlah_buku}</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Harga Buku</th>";
echo "<td>Rp. {$harga}</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Diskon Belanja (10%)</th>";
echo "<td>Rp. {$diskon_belanja}</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Diskon Transaksi (5%)</th>";
echo "<td>Rp. {$diskon_transaksi}</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Total Bayar</th>";
echo "<td>Rp. {$total_bayar}</td>";
echo "</tr>";
echo "</table>";
}
?>