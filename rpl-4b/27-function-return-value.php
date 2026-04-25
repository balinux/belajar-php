<?php

// rumus menghitung luas persegi panjang
function luasPersegiPanjang(int $panjang, int $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

$menghitungLuas = luasPersegiPanjang(2,4);
echo "Luasnya adalah ".$menghitungLuas;
