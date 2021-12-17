<?php
// koneksi database
include "koneksi.php";

//query untuk menampilkan semua data pada 
//tabel mahasiswa yang diurutkan berdadarkan nim
$sql="select * from mahasiswa order by nim";
// menyimpan data pada variable $tampil
$tampil = mysqli_query($con,$sql); 

//  fungsi mysqli_num_rows () untuk mengetahui berapa banyak jumlah baris
//  jika baris pada variable $tampil lebih dari 0 maka data akan ditampilkan.
if (mysqli_num_rows($tampil) > 0) {
$no=1;

// menyimpan data - data kedalam variable $response
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['nim'] = $r['nim'];
 $h['nama'] = $r['nama'];
 $h['jkel'] = $r['jkel'];
 $h['alamat'] = $r['alamat'];
 $h['tgllhr'] = $r['tgllhr'];
 // Array push fungsi untuk menambahkan elemen data berupa single elemen 
 // ataupun multi elemen berbentuk array ke database.
 array_push($response["data"], $h);
 }

 // fungsi json_encode() untuk menghasilkan JSON dari Array asosiatif
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>