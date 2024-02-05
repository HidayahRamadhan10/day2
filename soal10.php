<?php

$belanja = 170000;
$voucher = 10000;
$bonus = "1 kardus permen kaki";

if($belanja > 100000 && $belanja < 150000){
    $harga_akhir = $belanja - $voucher;
    echo "total belanja " . $harga_akhir;
}elseif($belanja >= 150000){
    $harga_akhir = $belanja - $voucher;
    echo "total belanja" . $harga_akhir . " dan " . $bonus;
}else{
    $harga_akhir = $belanja;
}
?>
