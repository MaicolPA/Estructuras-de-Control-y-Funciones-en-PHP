<?php
function calculoCostoTotal($clave, $minutos)
{
    $descuento = false;

    if ($minutos < 30) {
        $descuento = true;
    }
    $total = 0;
    switch ($clave) {
        case 12:
            echo "Esta llamando desde America del Norte<br>";
            $total = ($descuento) ? $minutos * 2 - (($minutos * 2) * 0.1) : $minutos * 2;
            echo "Total a pagar: $total<br>";
            break;

        case 15:
            echo "Esta llamando desde America central<br>";
            $total = ($descuento) ? $minutos * 2.2 - (($minutos * 2.2) * 0.1) : $minutos * 2.2;
            echo "Total a pagar: $total<br>";
            break;

        case 18:
            echo "Esta llamando desde America del Sur<br>";
            $total = ($descuento) ? $minutos * 4.5 - (($minutos * 4.5) * 0.1) : $minutos * 4.5;
            echo "Total a pagar: $total<br>";
            break;

        case 19:
            echo "Esta llamando desde Europa<br>";
            $total = ($descuento) ? $minutos * 3.5 - (($minutos * 3.5) * 0.1) : $minutos * 3.5;
            echo "Total a pagar: $total<br>";
            break;

        case 23:
            echo "Esta llamando desde Asia<br>";
            $total = ($descuento) ? $minutos * 6 - (($minutos * 6) * 0.1) : $minutos * 6;
            echo "Total a pagar: $total<br>";
            break;

        case 25:
            echo "Esta llamando desde Africa<br>";
            $total = ($descuento) ? $minutos * 6 - (($minutos * 6) * 0.1) : $minutos * 6;
            echo "Total a pagar: $total<br>";
            break;

        case 29:
            echo "Esta llamando desde Oceania<br>";
            $total = ($descuento) ? $minutos * 5 - (($minutos * 5) * 0.1) : $minutos * 5;
            echo "Total a pagar: $total<br>";
            break;
        default:
            echo "Clave no válida. Por favor, ingrese una clave válida.";
            return;
    }
}
calculoCostoTotal(29, 50);
