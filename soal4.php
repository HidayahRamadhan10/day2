<?php

$jamkerja = 8;
$jamlembur = 6;
$kompen = 30000;

if($jamkerja + $jamlembur > $jamkerja){
    $jamkerja = $jamkerja + $jamlembur - 8;
    $totalkerja = $jamkerja * $kompen;
}else{
    echo "tidak lembur";
}

echo "Total gaji kompensasi adalah" . " ".$totalkerja
?>