<?php

$name = "echa";
$grade = 70;
$standar = 75;
$remidial = 60;

if($grade > $standar) {
    echo "Lulus";
}elseif($remidial > $standar) {
    echo "Lulus jalur Remedial";
}else{
    echo "Tidak Lulus";
}

// tugas 
// tambahkan logikan perbandingan
