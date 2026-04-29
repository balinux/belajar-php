<?php

class Person{

    // kumpulan property/variabel
    public string $name;
    public string $address;
    public string $age;


    // method untuk menyapa orang lain
    // disini terdapat car apenggunaan keyword this

    function sayHello(string $name) {
        // halo mas $name alamatku di 
        echo "halo mas $name alamatku di $this->address";
    }

    public function __construct(int $age){
        echo "ini pasti dipanggil pertama kali".PHP_EOL;
    }

    // tugas buat contoh contant dan keyword self
}


$mahasiswa = new Person();
$mahasiswa->address = "rumbuk";
$mahasiswa->sayHello("budi");
