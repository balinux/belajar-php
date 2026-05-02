<?php

class Person{
    // properti
  public string $name;  
  public string $address;

  const VERSI_APLIKASI = "1.0.0";

  // method
  public function sayHello(string $name){
    // halo nama kamu adalah: fulan
    echo "halo nama kamu adalah: $name dan alamat di: $this->address".PHP_EOL;
    echo "versi aplikasi: " . self::VERSI_APLIKASI . PHP_EOL;
  }

//   function construct adalah sebuah function yang di panggil pertama kali saat object di buat

public function __construct(){
    echo "ini adalah function yang pertama kali di panggil".PHP_EOL;
}
 
}

// intance sebuah class ke dalam object
// menjalankan fungsi construct
$mahasiswa = new Person();
// ubah property
$mahasiswa->address = "selong";
// memanggil function
$mahasiswa->sayHello("kamal");
