<?php

function checkStatusKelulusan($grade, $remidial){
    if($grade > 75 && $remidial < 75){
        echo "anda lulus";
    }else{
        echo "tidak lulus";
    }
}


checkStatusKelulusan(70, 72);

// tugas
// buatlah function untuk menghitung luas persegi panjang
// dengan parameter panjang dan lebar
// lalu tampilkan hasilnya
