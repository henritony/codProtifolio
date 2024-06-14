<?php

// Variáveis para armazenar os números inseridos pelo usuário
$numeros = [];

// Variáveis para armazenar o tipo de cada número (inteiro ou decimal)
$tipos = [];

// Função para verificar se um número é inteiro ou decimal
function verificarTipo($numero) {
    if (filter_var($numero, FILTER_VALIDATE_INT) !== false) {
        return "inteiro";
    } elseif (filter_var($numero, FILTER_VALIDATE_FLOAT) !== false) {
        return "decimal";
    } else {
        return "inválido";
    }
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os números do formulário
    $numeros[] = $_POST["numero1"];
    $numeros[] = $_POST["numero2"];
    $numeros[] = $_POST["numero3"];
    
    // Verifica se os números são distintos
    if (count(array_unique($numeros)) == 3) {
        // Valida o tipo de cada número
        foreach ($numeros as $numero) {
            $tipos[] = verificarTipo($numero);
        }
    } else {
        $mensagem = "Os números devem ser distintos.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Números</title>
</head>
<body>
    <h1>Validação de Números</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero1">Número 1:</label>
        <input type="text" id="numero1" name="numero1" required><br>
        <label for="numero2">Número 2:</label>
        <input type="text" id="numero2" name="numero2" required><br>
        <label for="numero3">Número 3:</label>
        <input type="text" id="numero3" name="numero3" required><br>
        <button type="submit">Verificar Tipos</button>
    </form>
    
    <?php if (isset($tipos)): ?>
    <h2>Tipos de Números:</h2>
    <ul>
        <?php foreach ($tipos as $indice => $tipo): ?>
            <li>Número <?php echo $numeros[$indice]; ?> é do tipo <?php echo $tipo; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    
    <?php if (isset($mensagem)): ?>
    <p><?php echo $mensagem; ?></p>
    <?php endif; ?>
</body>
</html>
