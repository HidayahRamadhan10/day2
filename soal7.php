<?php

$nasi_goreng = 15000;
$ayam_bakar = 20000;
$nasi_kebuli = 25000;
$aneka_jus = 8000;
$teh_manis = 3000;
$es_jeruk = 5000;
$day = date('D');
$beli = $nasi_kebuli * 2 + $ayam_bakar + $nasi_goreng * 2;

if($day == 'Mon'){
    $harga = $beli * 0.02;
    echo "Dani Mendapatkan diskon sebesar $harga";
}elseif($day == 'fri'){
    $harga = $beli * 0.05;
    echo "Dani Mendapatkan diskon sebesar $harga";
}else{
    echo "Dani tidak mendapatkan diskon";
}