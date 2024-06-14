<?php
echo "
<strong>
Crie um Jogo que após gerar valores aleatoricos entre 0 ate 10.<br>
Quando enviado pelo user via Form faça;<hr></strong>
<strong>verifica se o palpite esta dentro do intervalo permitido e depois usamos,<br>
o caso para verificar se o palpite de esta correto, no final.<hr>
imprima<hr>
uma mensagem ao jogador o parabenizando pelo acerto.<br>
e deixando ele poder jogar novamente.</strong><hr> ";

$numbVal = (int) $_POST['numbVal'];
$verNumb;
// Gerando valores aleatorios função "rand(1,10)". //
$dados = rand(1,10); 

// Verificando se o valor digitado no form esta entre (0 até 10). //
if($numbVal >= 0 && $numbVal <= 10 ){
    $verNumb = "Valor Valido";
    // DESCRIÇÃO //
//----------//
// caso o user digite (de 01 até 10) imprima a msm "Parabém você pode jogar denovo". caso contrario imprima a msm "Você errou feio". //

    // estrutura CASO. //
    switch($dados){ 
        case 1: 
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
            echo "Parabém você pode jogar denovo<br>"; // <- caso acertou imprima esta msm. //
            break; // <- comando break = (para o loop caso a condição for correspondida). //
        default:// <- comando default = (caso a condição não for correspondida imprima a msm abaixo). //
            echo "Você errou feio<br>";         
    }
}else{
    $verNumb = "Valor Invalido<br>";
}

    



echo "O numero escolhido é:".$numbVal." e ele é um:".$verNumb;



?>