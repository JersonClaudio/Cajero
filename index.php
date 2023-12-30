<?php

require_once "Empleado.php";


// uso Retiro
$cajeroAutomatico = new Retiro(1000);

// Consultar saldo inicial
echo "Saldo inicial: $" . $cajeroAutomatico->consultarSaldo() . "<br>";

// Realizar retiro
echo $cajeroAutomatico->realizarRetiro(200) . "<br>";

// Consultar saldo después del retiro
echo "Saldo después del retiro: $" . $cajeroAutomatico->consultarSaldo() . "<br>";

// Intentar realizar un retiro con saldo insuficiente
echo $cajeroAutomatico->realizarRetiro(900) . "<br>" . "<br>";




// Crear instancia de Transferencia
$cajeroTransferencia = new Transferencia(1500);

// Realizar transferencia
echo $cajeroTransferencia->realizarTransferencia(300) . "<br>";

// Consultar saldo después de la transferencia
echo "Saldo después de la transferencia: $" . $cajeroTransferencia->consultarSaldo() . "<br>";

// Intentar realizar una transferencia con saldo insuficiente
echo $cajeroTransferencia->realizarTransferencia(2000) . "<br>" . "<br>";




// uso combinado
$cajeroAutomatico = new Cajero(1500);

// Consultar saldo inicial
echo "Saldo inicial: $" . $cajeroAutomatico->consultarSaldo() . "<br>";

// Realizar transferencia
echo (new Transferencia(0))->realizarTransferencia(50) . "<br>";

// Realizar retiro
echo (new Retiro(0))->realizarRetiro(200) . "<br>";

// Consultar saldo después de las operaciones
echo "Saldo después de las operaciones: $" . $cajeroAutomatico->consultarSaldo() . "<br>";




?>