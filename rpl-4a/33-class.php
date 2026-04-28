<?php

class Person{
    
    // di bawah ini adalah property
    public string $name;
    public string $address;

    // di bawah ini adalah method
    // penambahan penggunaan keyword this
    public function sayHello(string $name){
        echo "Halo : $name,"."alamat di: ". $this->address;
    }

    // construct adalah function yang dipanggil pertama kali oleh sebuah object class
    public function __construct(){
        echo "fungsi ini akan di panggil walaupun tidak di panggil oleh object".PHP_EOL;
    }

    // tugas buat desctuct function
}

// instansiasi/ instance sebuah object dari kelas Person

$mahasiswa = new Person();
$mahasiswa->address = "KLU";
$mahasiswa->sayHello("bagas");

