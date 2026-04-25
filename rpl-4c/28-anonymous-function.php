<?php

// rumus menghitung luas persegi panjang
$menghitungLuasPersegiPanjang = function (int $panjang, int $lebar){
    $luas = $panjang * $lebar;
    return $luas;
};


$luasPersegi = $menghitungLuasPersegiPanjang(4,5);
echo "Luas pesegi panjang adalah: " . $luasPersegi;