<?php

class Hewan{
    public $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function suara(){
        echo $this->name . "bersuara";
    }
}

class Jincuriki extends Hewan{

    public function suara(){
        echo "{$this->name} bersuara meong".PHP_EOL;
    }

    public function ngamukDiKonoha(){
        echo "{$this->name} ngamuk sampai yondaime tewas";
    }
}

$kurama = new Jincuriki("kurama");
$kurama->suara();
$kurama->ngamukDiKonoha();
