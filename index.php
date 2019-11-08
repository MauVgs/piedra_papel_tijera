<?php 

    $piedra = 'Piedra';
    $papel = 'Papel';
    $tijeras = 'Tijeras';


    $resultado = piedra_papel_tijera($papel, $papel);

    print_r($resultado);

    function piedra_papel_tijera($arg1, $arg2){

        $resultado = '';

        if($arg1 === $arg2){
            $resultado = '¡Empate!';
        }else if($arg1 === 'Piedra' && $arg2 === 'Papel'){
            $resultado = '¡Jugador 1 gana!';
        }else if($arg1 === 'Piedra' && $arg2 === 'Tijeras'){
            $resultado = '¡Jugador 1 gana!';
        }else if($arg1 === 'Papel' && $arg2 === 'Piedra'){
            $resultado = '¡Jugador 2 gana!';
        }else if($arg1 === 'Papel' && $arg2 === 'Tijeras'){
            $resultado = '¡Jugador 2 gana!';
        }else if($arg1 === 'Tijeras' && $arg2 === 'Piedra'){
            $resultado = '¡Jugador 2 gana!';
        }else if($arg1 === 'Tijeras' && $arg2 === 'Papel'){
            $resultado = 'Jugador 1 gana!';
        }

        return $resultado;
    }


?>