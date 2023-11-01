<html>
    <head>
        <title> proses input</title>
    </head>
    <body>
        <?
        $bil1=$_post["bil1"];
        $bil2=$_post["bil2"];
        ?>
        <h1>perbandingan bilangan </h1>
        <hr>
        bil 1 : <?echo $bil1 ?>
        <br>
        bil 2: <?echo $bil2 ?>
        <br>
        <?
        if($bil1<$bil2){
            echo"bil1 lebih kecil dari $bil2";

        }
        elseif(bil1>bil2){
            echo"$bil1 lebih besar dari $bil2";

        }
        else{
            echo "$bil1 sama dengan $bil2";

        }
        ?>
        </body>
        </html>
        
