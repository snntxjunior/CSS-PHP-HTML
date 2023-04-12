<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificador de Triângulos</h1>
        <form method="POST">
            
            <label for="lado1">Lado 1:</label>
            <input type="number" id="lado1" name="lado1"><br>

            <label for="lado2">Lado 2:</label>
            <input type="number" id="lado2" name="lado2"><br>

            <label for="lado3">Lado 3:</label>
            <input type="number" id="lado3" name="lado3"><br>

            <input type="submit" name="verificar" value="Verificar">
        </form>

        <p id="resultado">
            <?php
                if (isset($_POST['verificar'])) {
                    $lado1 = $_POST['lado1'];
                    $lado2 = $_POST['lado2'];
                    $lado3 = $_POST['lado3'];

                    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
                        if ($lado1 === $lado2 && $lado1 === $lado3) {
                        echo "Os lados formam um triângulo equilátero.";
                    } else if ($lado1 === $lado2 || $lado1 === $lado3 || $lado2 === $lado3) {
                        echo "Os lados formam um triângulo isósceles.";
                    } else {
                        echo "Os lados formam um triângulo escaleno.";
                    }
                    } else {
                        echo "Os lados não formam um triângulo.";
                    }
                }
            ?>
        </p>
</body>
</html>