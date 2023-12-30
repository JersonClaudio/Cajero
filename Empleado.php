<?php

class Cajero {
  protected $saldo;

  public function __construct($saldoInicial) {
      $this->saldo = $saldoInicial;
  }

  public function consultarSaldo() {
      return $this->saldo;
  }
}

class Transferencia extends Cajero {
  public function realizarTransferencia($monto) {
      if ($monto > 0 && $monto <= $this->saldo) {
          $this->saldo -= $monto;
          return "Transferencia exitosa. Nuevo saldo: $" . $this->saldo;
      } else {
          return "Error en la transferencia. Saldo insuficiente.";
      }
  }
}

class Retiro extends Cajero {
  public function realizarRetiro($monto) {
      if ($monto > 0 && $monto <= $this->saldo) {
          $this->saldo -= $monto;
          return "Retiro exitoso. Nuevo saldo: $" . $this->saldo;
      } else {
          return "Error en el retiro. Saldo insuficiente.";
      }
  }
}






?>