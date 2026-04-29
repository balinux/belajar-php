<?php

class Person{

    // kumpulan property/variabel
    public string $name;
    public string $address;
    public string $umur;


    // method untuk menyapa orang lain
    // disini terdapat car apenggunaan keyword this

    function sayHello(string $name) {
        // halo mas $name alamatku di 
        echo "halo mas $name alamatku di $this->address, umurku $this->umur";
    }

    // cara ke2 mengubah property
    public function __construct(string $umur){
        // mengubah nilai property umur
        $this->umur = $umur;
    }

    // tugas buat contoh contant dan keyword self
}


$mahasiswa = new Person("40");
$mahasiswa->address = "rumbuk";

$mahasiswa->sayHello("budi");
