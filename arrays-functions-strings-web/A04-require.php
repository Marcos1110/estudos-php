<?php

//Aula 04 -Include, Require e Require_Once
function exibeMensagem ($msg)
{
   echo $msg . PHP_EOL;
}

function saque(array $conta, float $valor): array
{
   if ($conta['saldo'] >= $valor) {
      $conta['saldo'] -= $valor;
   } else {
      exibeMensagem("Você não possui esse valor!");
   }

   return $conta;

}

function deposito(array $conta, float $valor): array
{
   if ($valor > 0) {
      $conta['saldo'] += $valor;
   } else {
      exibeMensagem("Depósito Inválido");
   }

   return $conta;

}

//Passagem de parâmetro por referência
function titularComLetrasMaiusculas(array &$conta)
{
   $conta['titular'] = mb_strtoupper($conta['titular']); 
}

