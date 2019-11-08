<?php 

    $piedra = 'Piedra';
    $papel = 'Papel';
    $tijeras = 'Tijeras';


    $resultado = piedra_papel_tijera($papel, $papel);

    print_r($resultado);

    function piedra_papel_tijera($arg1, $arg2){

        if($arg1 === $arg2) return '¡Empate!';

        if($arg1 === "Tijeras" && $arg2 === "Papel" || $arg1 === "Piedra" && $arg2 === "Tijeras" || $arg1 === "Papel" && $arg2 === "Piedra"){
            return 'Jugador 1 ganador';
        }else{
            return 'Jugador 2 ganador';
        }
    }

?>