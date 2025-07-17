<?php

function sumarPares($numeros) {
    $suma = 0;
    foreach ($numeros as $num) {
        if ($num % 2 === 0) {
            $suma += $num;
        }
    }
    return $suma;
}

// Preguntar cuántos números desea ingresar
if (!isset($_POST['cantidad']) && !isset($_POST['numeros'])) {
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Suma de Números Pares</title>
        <style>
            body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
            .container { background-color: #f0f4f8; padding: 20px; border-radius: 8px; }
            input[type="number"] { padding: 8px; width: 200px; margin: 10px 0; }
            button { padding: 8px 16px; background-color: #007acc; color: white; border: none; border-radius: 4px; cursor: pointer; }
            button:hover { background-color: #005f99; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Suma de Números Pares</h1>
            <form method="post" action="">
                <label for="cantidad">¿Cuántos números deseas ingresar?</label><br>
                <input type="number" id="cantidad" name="cantidad" min="1" required>
                <button type="submit">Continuar</button>
            </form>
        </div>
    </body>
    </html>
    ';
}

// Mostrar formulario con inputs según cantidad
elseif (isset($_POST['cantidad']) && !isset($_POST['numeros'])) {
    $cantidad = intval($_POST['cantidad']);

    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Ingresar Números</title>
        <style>
            body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
            .container { background-color: #f0f4f8; padding: 20px; border-radius: 8px; }
            input[type="number"] { padding: 8px; width: 200px; margin: 10px 0; }
            button { padding: 8px 16px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
            button:hover { background-color: #218838; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Ingresa los Números</h1>
            <form method="post" action="">
                <input type="hidden" name="cantidad" value="' . $cantidad . '">';
                
                for ($i = 1; $i <= $cantidad; $i++) {
                    echo '
                    <label for="num' . $i . '">Número ' . $i . ':</label><br>
                    <input type="number" name="numeros[]" id="num' . $i . '" required><br>';
                }

    echo '
                <button type="submit">Calcular suma de pares</button>
            </form>
        </div>
    </body>
    </html>
    ';
}

// Procesar los números y mostrar resultado
elseif (isset($_POST['numeros'])) {
    $numeros = array_map('intval', $_POST['numeros']);
    $suma = sumarPares($numeros);
    $lista = implode(", ", $numeros);

    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Resultado</title>
        <style>
            body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; }
            .container { background-color: #f0f4f8; padding: 20px; border-radius: 8px; }
            .resultado { margin-top: 20px; padding: 15px; border-radius: 4px; background-color: #d4edda; color: #155724; font-size: 1.1em; }
            .volver { display: inline-block; margin-top: 15px; padding: 8px 16px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; }
            .volver:hover { background-color: #0069d9; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Resultado</h1>
            <div class="resultado">
                Los números ingresados fueron: [' . $lista . ']<br>
                ✅ La suma de los números pares es: <strong>' . $suma . '</strong>
            </div>
            <a href="' . $_SERVER["PHP_SELF"] . '" class="volver">Volver a comenzar</a>
        </div>
    </body>
    </html>
    ';
}
?>