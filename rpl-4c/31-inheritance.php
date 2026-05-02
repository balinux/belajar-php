<?php

// class parent

class Hewan{
    public string $name;

    public function __construct(string $name){
        // mengubah nilai dari variabel name
        $this->name = $name;
    }

    public function bersuara(){
        echo "hewan ini $this->name bisa bersuara";
    }

    public function makan(){
        echo "hewan ini bisa makan";
    }


}

class Kucing extends Hewan{
    public function bersuara(){
        echo "kucing saya bernama $this->name, dan dia bisa mengeong";
    }

    public function memanjat(){
        echo "hewan ini bisa memanjat";
    }
}

$kucing = new Kucing("kurama");
$kucing->bersuara();
$kucing->makan();
$kucing->memanjat();
