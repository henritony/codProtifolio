<?php

// Função para sortear um número aleatório entre 1 e 100
function sortearNumero() {
    return rand(1, 5);
}

// Inicialização das variáveis
$numeroSorteado = sortearNumero();
$tentativas = 0;
$mensagem = "";

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o palpite do usuário
    $palpite = $_POST["palpite"];
    
    // Incrementa o número de tentativas
    $tentativas++;
    
    // Verifica se o palpite está correto
    if ($palpite == $numeroSorteado) {
        $mensagem = "Parabéns! Você acertou em $tentativas tentativas.";
        $mensagem .= "<br><br><form method='post'><input type='submit' name='novo_sorteio' value='Realizar novo sorteio'></form>";
    } elseif ($palpite < $numeroSorteado) {
        $mensagem = "Tente um número maior.";
    } else {
        $mensagem = "Tente um número menor.";
    }
}

// Verifica se o usuário deseja realizar um novo sorteio
if (isset($_POST['novo_sorteio'])) {
    $numeroSorteado = sortearNumero();
    $tentativas = 0;
    $mensagem = "";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Adivinhação</title>
</head>
<body>
    <h1>Jogo de Adivinhação</h1>
    <p><?php echo $mensagem; ?></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="palpite">Digite um número entre 1 e 5:</label>
        <input type="number" id="palpite" name="palpite" min="1" max="100">
        <button type="submit">Enviar Palpite</button>
    </form>
</body>
</html>
