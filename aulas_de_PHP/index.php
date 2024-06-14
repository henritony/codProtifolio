<?php
$srv = 'http://'.$_SERVER['SERVER_NAME'];// <- para ver o nome do servidor aonde o site esta hospedado
$urlBase = $_SERVER['REQUEST_URI']; // <- para ver o nome do arquivo dentro do servidor (dentro da maquina)
    $acao = htmlspecialchars($_SERVER['PHP_SELF']);// <- a mesma coisa do de cima (so que este tem o tratamento UTF-8)
    $urlAcao = $srv.$acao;// <- para conctenar os conteudos das var [$servidor.$acao;]

    // Verificar se o formulario foi submetido //
    if($_SERVER['REQUEST_METHOD'] == "POST"){    // $_SERVER['REQUEST_METHOD'] -> ESTA VENDO QUAL E O METODO QUE O FORMULARIO ESTA USANDO
                                                //  ($_SERVER['REQUEST_METHOD'] == "POST") -> ESTA COMPARANDO SE O METODO DO FORMULARIO E "POST".  
        //obter o palpite do jogador via form//
        $palpite = $_POST['palpite'];    // <- $palpite = ESTA RECEBENDO A VAR. $_POST['palpite'];
                                        // ANOTAÇÃO: a var.$_POST['palpite']; = ESTA BUSCANDO O VETOR DE id="palpite" DE DENTRO DO FORMULARIO.

        // verificar se o jogador passou o valor entre 0 e 10.
        // null <- para ver se a var $palpite esta vazia.
        // empty <- para ver se o conteudo de dentro da var $palpite esta vazia.
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