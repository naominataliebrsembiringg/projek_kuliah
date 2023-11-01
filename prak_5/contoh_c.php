<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koneksi database mysql </title>
</head>
<body>
    <h1>koneksi database dengan mysqli_fetch_array</h1>

    <?php
    $conn=mysqli_connect("localhost","root","","db_saya")
    or die ("koneksi gagal");
    $hasil =mysqli_query($conn , "select * from liga");
    while ($row=mysqli_fetch_array($hasil)) {
        echo "liga".$row ["negara"]; //array asosiatif
        echo "mempunyai".$row [2]; //array numeris
        echo "wakil diliga champion<br>";
    }
?>
</body>
</html>