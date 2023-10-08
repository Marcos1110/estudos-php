<?php

//Aula 03 - Funções

/* 
<< Fução x Subrotina >>
   -> Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução. Uma subrotina apenas executa um código isolado.
*/

require_once 'A04-require.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

exibeMensagem("Antes das Operações: ");
foreach($contasCorrentes as $conta) {
   exibeMensagem("Titular: " . $conta['titular'] . " - " . "Saldo: R$" . $conta['saldo'] );
}
echo PHP_EOL;

//Operações:
$contasCorrentes['123.456.789-10'] = saque($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.456.689-11'] = deposito($contasCorrentes['123.456.689-11'], 1200);
titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);
unset($contasCorrentes['123.456.689-11']);
//Fim das Operações -


exibeMensagem("Depois das Operações:");
foreach($contasCorrentes as $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("Titular: $titular - Saldo: R$ $saldo");
}
echo PHP_EOL;


?>