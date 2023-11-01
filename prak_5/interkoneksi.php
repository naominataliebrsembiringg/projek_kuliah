<html>
<head>
    <title> koneksi database mysql </title>
</head>
<body>
    <h1>Demo Koneksi Database Mysql</h1>
    <?php
    $conn=mysqli_connect ("localhost","root","");
    if ($conn){
        echo"server terkoneksi";
    } else{
        echo"server tidak terkoneksi";
    }
    ?>
</body>
</html>
