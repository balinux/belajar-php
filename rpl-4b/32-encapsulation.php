<?php

class BankAccount{

    // private property untuk menyimpan uang
    private $balance;

    public function __construct($balanceInput){
        $this->balance = $balanceInput;
    }

    // function getter untuk menampilkan saldo
    public function getBalance(){
        echo "saldo : $this->balance";
    }

    public function topup($saldoTopup){
        $this->balance += $saldoTopup;
    }

    public function tarikSaldo($jumlahPenarikan){
        $this->balance -= $jumlahPenarikan;
    }

}

$accountKholis = new BankAccount(100);
$accountKholis->getBalance();
$accountKholis->topup(300);
$accountKholis->getBalance();
$accountKholis->tarikSaldo(300);
$accountKholis->getBalance();

