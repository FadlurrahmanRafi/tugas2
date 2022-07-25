<?php
$a =(int)readline("masukkan angka awal : ");
$b =(int)readline("masukkan angka akhir : ");
$c =(int)readline("masukkan angka perkalian : ");

while($a >= $b){ 
    $hasil = $a * $c;
    echo "$a x $c = $hasil" . "\n";
    $a++;
}
?>