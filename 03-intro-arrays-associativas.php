<?php

$testeAssociativa = [
    42 => 'Resposta',
    'pergunta' => '???'
];

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 23021
];

$conta3 = [
    'titular' => 'Whesker',
    'saldo' => 214
];

//Array de arrays
$contasBancarias = [$conta1, $conta2, $conta3];

// percorrer elementos
for ($i = 0; $i < count($contasBancarias); $i++){
    echo $contasBancarias[$i]['saldo'] . PHP_EOL;
}