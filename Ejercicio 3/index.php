<?php
function esPalindromo()
{
    $cadena = "Dabale arroz a la zorra el abad";
    echo "Cadena antes de las transformaciones: $cadena";
    $cadena = strtolower($cadena);
    $cadena = preg_replace('/[^a-z]/', '', $cadena);
    echo "Resultado remplazado: $cadena<br>";
    $longitud = strlen($cadena);
    $esPalindromo = true;

    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($cadena[$i] !== $cadena[$longitud - 1 - $i]) {
            $esPalindromo = false;
            break;
        }
    }

    if ($esPalindromo) {
        echo "La cadena es un palíndromo.";
    } else {
        echo "La cadena no es un palíndromo.";
    }
}
esPalindromo();
?>