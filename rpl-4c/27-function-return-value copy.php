<?php

//  kamu bukan siapa-siapa
function menghitungLuasPersegiPanjang(int $panjang, int $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

$luasPersegi = menghitungLuasPersegiPanjang(4,5);
echo "Luas pesegi panjang adalah: " . $luasPersegi;


// tugas membuat function untuk menghitung luas segitiga