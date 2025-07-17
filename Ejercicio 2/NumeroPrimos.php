<?php

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    
    if ($numero <= 3) {
        return true;
    }
    
    if ($numero % 2 === 0 || $numero % 3 === 0) {
        return false;
    }
    
    $i = 5;
    $w = 2;
    
    while ($i * $i <= $numero) {
        if ($numero % $i === 0) {
            return false;
        }
        $i += $w;
        $w = 6 - $w;
    }
    
    return true;
}

if (!isset($_POST['numero'])) {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Verificador de números primos</title>
        <style>
            body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
            .container { background-color: #f5f5f5; padding: 20px; border-radius: 8px; }
            input[type="number"] { padding: 8px; width: 200px; margin: 10px 0; }
            button { padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; }
            button:hover { background-color: #45a049; }
            .result { margin-top: 20px; padding: 10px; border-radius: 4px; }
            .primo { background-color: #d4edda; color: #155724; }
            .no-primo { background-color: #f8d7da; color: #721c24; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Verificador de números primos</h1>
            <form method="post" action="">
                <label for="numero">Ingresa un número entero positivo:</label><br>
                <input type="number" id="numero" name="numero" min="1" required>
                <button type="submit">Verificar</button>
            </form>
    ';
} else {
    $numero = (int)$_POST['numero'];
    $esPrimo = esPrimo($numero);
    
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Resultado - Verificador de números primos</title>
        <style>
            body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
            .container { background-color: #f5f5f5; padding: 20px; border-radius: 8px; }
            .result { margin-top: 20px; padding: 15px; border-radius: 4px; font-size: 1.2em; }
            .primo { background-color: #d4edda; color: #155724; }
            .no-primo { background-color: #f8d7da; color: #721c24; }
            .volver { display: inline-block; margin-top: 15px; padding: 8px 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; }
            .volver:hover { background-color: #0069d9; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Resultado</h1>
            <div class="result ' . ($esPrimo ? 'primo' : 'no-primo') . '">
                <strong>' . $numero . '</strong> ' . ($esPrimo ? 'es un número primo.' : 'no es un número primo.') . '
            </div>
            <a href="' . $_SERVER["PHP_SELF"] . '" class="volver">Verificar otro número</a>
    ';
}

echo '
        </div>
    </body>
    </html>
';
