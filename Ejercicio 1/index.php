<?php
    /**Problema de la serie Fibonacci: Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y genere los primeros n términos de la serie Fibonacci. La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores. */

    function Fibonacci($n) {
        $segundo = 1;
        $primero = 0;
        $resp = 0;
        $cont = 2;

        echo "SERIE DE FIBONACCI"."<br>";
        echo "Primeros $n terminos"."<br>"."<br>";
        echo "$primero, $segundo, ";
        while ($cont < $n) {
            $resp = $primero + $segundo;
            echo "$resp, ";
            $primero = $segundo;
            $segundo = $resp;
            $cont++;
        }
    }

    Fibonacci(10);
?>