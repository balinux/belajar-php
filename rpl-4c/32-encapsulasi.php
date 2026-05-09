<?php

class Hewan{
    public $name;
    private $tail;

    public function suara(){
        echo "suara hewan $this->name adalah meow, dia memiliki $this->tail ekor";
    }

    public function menambahEkor(int $addTail){
        $this->tail = $addTail;
    }


}

// bagaimana cara instance class agar bisa membuat objec

$kucing = new Hewan();
$kucing->name = "kurama";
$kucing->menambahEkor(9);

$kucing->suara();
