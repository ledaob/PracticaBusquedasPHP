<?php
$numeros = [10, 20, 30, 40, 50];
$inicio = 0;
$fin = count($numeros) - 1;
$buscado = 20;
$encontrado = false;


while ($inicio <= $fin){
    $medio = intdiv($inicio + $fin, 2);

    if($numeros[$medio] == $buscado){
        $encontrado = true;
        break;
    } elseif ($numeros[$medio] < $buscado) {
        $inicio = $medio + 1;
    } else {
        $fin = $medio - 1;
    }
}

if ($encontrado){
    echo "Encontrado";
} else {
    echo "No encontrado";
}

?>
