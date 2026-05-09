<?php

class Person{
    // property
  private string $name;  
  public string $address;

  public int $ageProperty;

  const VERSI_APLIKASI = "1.0.0";

  // method -> function yang ada di dalam class
  public function sayHello(string $name){
    // halo nama kamu adalah: fulan
    echo "halo nama kamu adalah: $name dan alamat di: $this->address".PHP_EOL;
    echo "usia kamu adalah: $this->ageProperty tahun".PHP_EOL;
    echo "versi aplikasi: " . self::VERSI_APLIKASI . PHP_EOL;
  }

//   function construct adalah sebuah function yang di panggil pertama kali saat object di buat

public function __construct(int $ageParameter){
    // mengubah nilai property age dari contruct
    $this->ageProperty = $ageParameter;
}
 
}

// intance sebuah class ke dalam object
// menjalankan fungsi construct
$mahasiswa = new Person(20);
// ubah property
$mahasiswa->name = "abdullah";
echo $mahasiswa->name.PHP_EOL;

// memanggil function
// $mahasiswa->sayHello("kamal");
