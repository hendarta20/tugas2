<?php
include("koneksi.php");
$sql="select*from mahasiswa";
$proses=mysqli_query($koneksi, $sql);
while ($isi =mysqli_fetch_assoc($proses)){
    echo " Nim                       : ".$isi['nim'] ."<br><br>";
    echo " Nama                      : ".$isi['nama'] ."<br><br>";
    echo " Jenis Kelamin             : ".$isi['jenkel'] ."<br><br>";
    echo " Tempat Tanggal Lahir      : ".$isi['lahir'] ."<br><br>";
    echo " Nomor HP                  : ".$isi['hp'] ."<br><br>";

}
?>