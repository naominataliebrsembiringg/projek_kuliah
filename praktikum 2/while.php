<?php
echo"<H3> cara 1 </H3>";
$i =1;
while($i <=10)
{
    print $i++;

}
echo"<br>";
echo"<h3> cara 2 </h3>";
$i=1;
while($i<=10):
    print $i;
    $i++;
endwhile;
?>