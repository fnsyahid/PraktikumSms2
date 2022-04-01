<?php


class Account {
    protected $nomor;
    protected $saldo;

    public function __construct($no, $sal)
    {
        $this->nomor = $no;
        $this->saldo = $sal;
    }


    public function deposit($nominal){
        $this->saldo += $nominal;
    }


    public function withdraw($jumlah){
        $this->saldo = $jumlah;
    }

    public function cetak(){
        echo"Saldo kamu sekarang adalah $this->saldo";
    }


}


class AccountBank extends Account{

    public function customerTransfer($no, $duit){
        $this->saldo -= $duit;
        $tmp = new Account($no, $duit);
        $no->saldo+=$duit;
        
        
    }
}

$ahmad = new AccountBank('0110', 100000);
$jason = new AccountBank('0111', 500000);

$ahmad->cetak();
$ahmad->deposit(1000000);
$ahmad->cetak();


$jeson -> cetak();
$jeson -> customerTransfer($ahmad->no, 500000);

$jason->cetak();
$ahmad->cetak();
?>