<?php

$andi = 2004;
$eko = $andi - 3;

if($andi %4 == 0){
    echo "keduanya lahir ditahun kabisat";
}elseif($andi %4 == 0){
    echo "andi lahir ditahun kabisat";
}elseif($eko %4 == 0){
    echo "eko lahir di tahun kabisat";
}else{
    echo "keduanya tidak lahir ditahun kabisat";
}