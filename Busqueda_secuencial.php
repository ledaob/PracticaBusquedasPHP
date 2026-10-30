<?php
    $numeros = [9, 4, 7, 2];
    $buscado = 7;
    $encontrado = false;

    foreach ($numeros as $numero){
        if($numero == $buscado) {
            $encontrado = true;
            break;
        }
    }

    if ($encontrado){
        echo "Encontrado.";
    } else {
        echo "No encontrado";
    }
    
?>

