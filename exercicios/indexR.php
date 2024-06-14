

<?php
    //    Continuação desse exercicio //
    /* Neste jogo insira:
    * 1° um loop para ver quantas vezes que  o user teve até acertar o valor sorteado.
    * para a impressão faça:
    * 1° quando a saida for parabens colocar:
        * a) você acertou em x tentativas.
        * b) e se o user deseja realizar um novo sorteio.
    */
    //===============================//
    echo "<h1> INSTRUÇÕES PARA O EXERCÍCIO </H1><hr>";
    echo "<h2> Insira um loop para;</h2>";
    echo "<h2> Tentativas de vezez que o user teve até o acertar o valor sorteado.</h2>";
    echo "<h2> No final qunado a sada for Parabens colocar:<br>Você acertou em (x tentativas) e realizar um novo sorteio do valor sorteado </h2><hr>";

    $srv = 'http://'.$_SERVER['SERVER_NAME'];
    $urlBase = $_SERVER['REQUEST_URI']; 
    $acao = htmlspecialchars($_SERVER['PHP_SELF']);
    $urlAcao = $srv.$acao;

    // Verificar se o formulario foi submetido //
    if($_SERVER['REQUEST_METHOD'] == "POST"){    
                                                 
        //obter o palpite do jogador via form//
        $palpite = $_POST['palpite'];    
                                        

        if(($palpite !== null) && ($palpite >=0) && ($palpite <= 10)){
            $valSorteado = rand(0,10);

            // Compara o palpite com o número sorteado;
            //usando a estrutura caso = "switch".
            switch(true){
                case $palpite < $valSorteado:
                    $resp = "Muito baixo<br>TENTE DE NOVO!!! <br> Número da sorte era:".$valSorteado;
                    break;
                case $palpite > $valSorteado:
                    $resp = "Muito alto!<br>TENTE DE NOVO!!! <br> Número da sorte era:".$valSorteado;
                    break;
                default:
                $resp = "Parabéns!<br>JOGUE DE NOVO!!!"; 
            }

        }else{
            $resp = "Por Favor insira um número valido entre 0 e 10";  
        }
    }

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Html não consegue pegar o no do arquivo e nem o servidor como no php -->
    <h1>Jogo de Adivinhação</h1>
    <p>Tente adivinha um número entre 0 e 10!</p>
    <!-- <form method="post" action="<?php echo $urlAcao ?>"> 1° forma de fazer o formulario de php ler ele mesmo</form> -->

    <form method="post" action="<?=$urlAcao?>"><!-- 2° forma -->
        <label> Seu Plapite:</label>
        <input type="number" name="palpite" id="palpite" required>
        <input type="submit" value="Enviar Palpite">
    </form> 
    <h2>
        <?php
        // ANOTÇAÕ: iserir a resposta via BACK-END //
        //  para ver qual e o method usado no formulario//
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            echo $resp;
        }
        ?>
    </h2>
    <!-- <?php
    echo "ENDEREÇO DO SERVIDOR php $srv<br>";
    echo "ENDEREÇO DE URL PASTA MAIS ARQUIVO $urlBase<br>";
    echo "ENDEREÇO DE URL PASTA MAIS ARQUIVOS $acao<br>";
    echo "URL COMPLETA $urlAcao";
    ?> -->
</body>
</html>