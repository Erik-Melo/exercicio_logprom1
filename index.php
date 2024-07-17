<?php

/*Exercicio com laco de repetocao (for) e SWITCH CASE*/

//QUANTIDADE DE PATINHOS DIGITADAS
$patinhos = readline('Digite a quantidade de patinhos: ');

// VALIDACAO DA QTD DE PATINHOS
if(!is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10) {
    echo "O Número de patinhos digitados é inválido.\n";
    echo "É necessário um valor maior que 1 e menor que 10.\n";
    exit;
}

// ITERA A QUANTIDADE TOTAL DE PATINHOS
for($i = $patinhos; $i > 0; $i--) {
    echo "\n";

    // CONDICAO DA QTD DE PATINHOS - USO DO TERNARIO
    echo (isset($i) && $i != 1) ?
    $i." patinhos foram passear\n"
    : "1 patinho foi passear\n";

    // LETRA FIXA
    echo "Além das montanhas para brincar\n";
    echo "A mamãe gritou: Quá, quá, quá, quá\n";

    // QTD RESTANTE DE PATINHOS - USO DO SWITCH CASE
    switch($i) {
        case 2:
            echo "Mas só 1 patinho voltou de lá.\n";
            break;

        case 1:
            echo "Mas nenhum patinho voltou de lá.\n";
            break;

        default:
            echo "Mas só ".($i - 1)." patinhos voltaram de lá.\n";
            break;
    }
}

// ESTROFE FINAL
echo "\n";
echo "A mamãe patinha foi procurar\n";
echo "Além das montanhas, na beira do mar\n";
echo "A mamãe gritou: Quá, quá, quá, quá!\n";
echo "E os ".$patinhos." patinhos voltaram de lá.\n";
echo "\n";
