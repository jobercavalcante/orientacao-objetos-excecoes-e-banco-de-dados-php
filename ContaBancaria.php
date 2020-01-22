<?php

declare (strict_types=1);
class ContaBancaria
{
    public $banco;
    public $nomeTitular;
    public $numeroAgencia;
    public $numeroConta;
    private $saldo;

    public function __construct(string $banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }
    public function obtertSaldo()
    {
        return 'Seu saldo é de: R$'.$this->saldo;
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return 'Depositado R$'.$valor;
    }
    public function sacar(float $valor)
    {
        $this->saldo -= $valor;
        return 'Retirado R$'.$valor;
    }
}


$conta = new ContaBancaria('Santander', 'Jhon doe', 5, 656565, 2000.00);
echo '<pre>';
var_dump($conta);
var_dump($conta->nomeTitular);
var_dump($conta->obtertSaldo());
var_dump($conta->depositar(350));
var_dump($conta->obtertSaldo());
var_dump($conta->sacar(850));
var_dump($conta->obtertSaldo());
