<?php
$kolom=$_post['kolom'];
$cari=$_post['cari'];
$conn = mysqli_connect("localhost","root","","db_saya");
$hasil=mysqli_query($conn,"select * from buku_tamu where $kolom like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);
echo"<br>";
echo"ditemukan: $jumlah";
echo"<br>";
while($baris=mysqli_fetch_array($hasil))
{
    echo"nama:";
    echo $baris[0];
    echo"<br>";
    echo"email:";
    echo $baris[1];
    echo"<br>";
    echo"komentar: ";
    echo $baris[2];
}
?>