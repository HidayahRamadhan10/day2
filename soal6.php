<?php

$a = 44;
$b = 148;
$imt = $a / (($b/100) ** 2);

if($imt < 18.5){
    echo "berat badan kurang";
}elseif($imt >= 18.5 && $imt <= 22.9){
    echo "Normal";
}elseif($imt >= 22.9 && $imt <= 24.9){
    echo "Berat badan lebih";
}elseif($imt >= 25){
    echo "Obesitas";
}
?>