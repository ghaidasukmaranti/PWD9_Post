<?php
// koneksi database
include "koneksi.php"; 
header('Content-Type: text/xml');

// query untuk menampilkan semua data pada tabel mahasiswa
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($con,$query);

// mysqli_num_fields ( ) Mengembalikan jumlah bidang dalam hasil set
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";

//menyimpan / mengambil baris - baris data drai variable $hasil ke variable $data
while ($data = mysqli_fetch_array($hasil))
{
 echo "<mahasiswa>";
 echo"<nim>",$data['nim'],"</nim>"; // menampilkan data nim
 echo"<nama>",$data['nama'],"</nama>"; // menampilkan data nama
 echo"<jkel>",$data['jkel'],"</jkel>"; //menampilkan data jkel
 echo"<alamat>",$data['alamat'],"</alamat>"; // menampilkan data alamat
 echo"<tgllhr>",$data['tgllhr'],"</tgllhr>"; // menmpilkan data tanggal lahir
 echo "</mahasiswa>";
}
echo "</data>";
?>