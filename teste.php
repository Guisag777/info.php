<?php

function bubbleSort($arrayDesordenado) {
    // Obtém o tamanho do array
    $length = count($arrayDesordenado);
    
    // Inicializa uma variável para rastrear se ocorreram trocas
    $trocou = true;
    
    // Enquanto ocorrerem trocas (ou seja, enquanto $trocou for true)
    while ($trocou) {
        // Define $trocou como false no início de cada passagem
        $trocou = false;
        
        // Faz uma passagem completa pelo array
        for ($i = 0; $i < $length - 1; $i++) {
            // Compara dois elementos adjacentes
            if ($arrayDesordenado[$i] > $arrayDesordenado[$i + 1]) {
                // Se o elemento atual for maior que o próximo elemento,
                // troca os elementos de posição
                $temp = $arrayDesordenado[$i];
                $arrayDesordenado[$i] = $arrayDesordenado[$i + 1];
                $arrayDesordenado[$i + 1] = $temp;
                
                // Marca que ocorreu uma troca nesta passagem
                $trocou = true;
            }
        }
    }
    
    // Quando não houver mais trocas, o array estará ordenado
    return $arrayDesordenado;
}

// Exemplo de uso:
$arrayDesordenado = [5, 2, 9, 1, 5, 6];
$arrayOrdenado = bubbleSort($arrayDesordenado);

echo "Array Desordenado: ";
print_r($arrayDesordenado);

echo "Array Ordenado: ";
print_r($arrayOrdenado);

