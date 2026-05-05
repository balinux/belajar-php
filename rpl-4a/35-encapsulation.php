<?php

class BankAccount{
    private $balance;

    public function __construct($saldoAwal){
        $this->balance = $saldoAwal;
    }
    
    // getBalance = fungsi untuk memanggil atribute private
    public function getBalance(){
        return $this->balance;
    }

    public function deposit($saldoDeposit){
        $this->balance += $saldoDeposit;
    }
    
}

$account = new BankAccount(100);
$account->deposit(200);

echo "tabungan kamu sekarang adalah: ".$account->getBalance();
