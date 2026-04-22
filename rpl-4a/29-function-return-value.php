<?php

function menghitungLuasPersegiPanjang(int $panjang, int $lebar){
    $hasil = $panjang * $lebar;
    return $hasil;
}

$tangkapData = menghitungLuasPersegiPanjang(2,1);

echo $tangkapData;




