<!DOCTYPE html>
<html>
<head>
    <title>Verificar Triângulo</title>
</head>
<body>
    <h2>Verificar Triângulo</h2>
    <form method="post" action="">
        <label for="lado1">Lado 1:</label>
        <input type="text" id="lado1" name="lado1"><br><br>
        <label for="lado2">Lado 2:</label>
        <input type="text" id="lado2" name="lado2"><br><br>
        <label for="lado3">Lado 3:</label>
        <input type="text" id="lado3" name="lado3"><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];

        function validar_triangulo($a, $b, $c) {
            if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
                return true;
            } else {
                return false;
            }
        }

        function tipo_triangulo($a, $b, $c) {
            if ($a == $b && $b == $c) {
                return "Triângulo Equilátero";
            } elseif ($a == $b || $a == $c || $b == $c) {
                return "Triângulo Isósceles";
            } else {
                return "Triângulo Escaleno";
            }
        }

        if (validar_triangulo($lado1, $lado2, $lado3)) {
            $tipo = tipo_triangulo($lado1, $lado2, $lado3);
            echo "<p>Os valores formam um $tipo</p>";
        } else {
            echo "<p>Os valores não formam um triângulo.</p>";
        }
    }
    ?>
</body>
</html>
 