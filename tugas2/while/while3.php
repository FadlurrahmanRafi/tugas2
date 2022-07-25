<?php
$a =(int)readline("masukkan nilai awal : ");
$b =(int)readline("masukkan nilai akhir : ");
$c =(int)readline("masukkan nilai angka yang ingin di skip : ");

while ($a <= $b){
    if($a == $c){
        $a++;
        continue;
    }
    echo $a++;
}
?>