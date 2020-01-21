<?php
class ContaBancaria
{
    public $banco;
    public $nomeTitular = 'Jober Cavalcante';
    public $numeroAgencia;
    public $numeroConta;
    private $saldo;
}


$conta = new ContaBancaria();
echo '<pre>';
var_dump($conta);
var_dump($conta->nomeTitular);
