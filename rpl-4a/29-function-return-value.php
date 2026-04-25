<?php

// ini ada fungsi untuk menghitung luas persegi panjang
function menghitungLuasPersegiPanjang(int $panjang, int $lebar){
    // $hasil adalah untuk menampung luas
    $hasil = $panjang * $lebar;
    return $hasil;
}

$tangkapData = menghitungLuasPersegiPanjang(2,1);

echo $tangkapData;




