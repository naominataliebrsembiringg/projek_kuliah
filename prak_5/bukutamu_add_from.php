<html>
    <head>
        <title>simpan buku_tamu</title>
    </head>
    <body>
        <h1>simpan buku_tamu mysql</h1>
        <?php
        $nama=$_post["nama"];
        $email=$_post["email"];
        $komentar=$_post["komentar"];
        $conn=mysqli_connect
        ("localhost","root","db_saya")
        or die ("koneksi gagal");
        echo"nama : $nama<br>";
        echo"email: $email<br>";
        echo"komentar: $komentar<br>";
        $hasil = mysqli_query($conn,"insert into buku_tamu (nama,email,komentar)
        values ('$nama',$email','$komentar')");
        echo"simpan buku_tamu berhasil dilakukan ";
        ?>
        </body>
        </html>
        
