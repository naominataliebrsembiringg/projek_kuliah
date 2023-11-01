<html>
<head>
    <title>koneksi database mysql</title>
</head>
<body>
    <h1>koneksi database dengan mysqli_fetch_assoc</h1>
    <?php
    $conn=mysqli_connect("localhost","root","","db_saya")
    or die ("koneksi gagal ");
    $hasil=mysqli_query($conn,"select * from liga",$conn);
    while($row=mysqli_fetch_row($hasil)){
        echo"liga".$row[1];
        echo"mempunyai".$row[2];
        echo"wakil diliga champion<br>";

    }
    ?>
    </body>
    </html>