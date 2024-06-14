<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    <p>
        <strong>Crie um programa que após receber os dados doe um fúncionario faça:</strong><hr>

        Nome, Rg , Cpf , data de Nascimento , tipo sanguinio e fator RH ,<br>
        Cargo ,depatamento , Sálario Bruto , Hórario de entrada , Hórario de saida<br> (levando em consideraçao que ele tem uma hora de almoço entre as 12h ate as 13h);<br><br>

            <strong>Cálcule :</strong><br>
        O tempo de permanencia na empresa em relação ao tempo de sua entrada e saida Descontando o almoço;
        armazene as variaveis static com a tabla de INSS: <br><br>

                        <strong>tabela do INSS</strong><br>
                    -----------------------------<br>
                    até R$ 1.412,00 - 7,5%<br>
                    até R$ 2.666,68 - 9%<br> 
                    até R$ 4.000,03 - 12%<br> 
                    acima de R$ 4.000,04 - 14%<br> 
    </p><hr>
      
</body>
</html>


<?php

$nome = " teste";
$RG =  45633388858;
$Cpf = "000.000.000-00";
$dtNasc = "00/00/00";
$tipoSang = "A,B,O,AB";
$fatorRHSang = " positivo ( + ) ou negativo ( - )";
$cargoFunc = " ";
$depart = " ";
$salBruto = 1000;
$horEnt = " ";
$horSaida = " ";
$almoço = " 01.00 hora";


$inssA =  0.075;
$inssB =  0.09;
$inssC =  0.12;
$inssD =  0.14;

$tes = $salBruto * $inssA;



echo "<p>" .(1.41205 * 0.30). "</p>";
echo "<h1>".$inssA."</h1>";
echo "<h2>" .$tes. "<h2>";


// nota: no php você pode fazer o calculo dentro da saida e exibira o resultado //
//  echo $salBruto * $inssA;

// echo $salBruto * $inssB;// <- mas ele não pula linha assim //
//echo $inssB;

// comando para reconhecer qual é o tipo de var utilizada //
// var_dump()A função retorna o tipo de dados e o valor //
 var_dump($inssC);
 var_dump($nome);
 var_dump($RG);
 var_dump($tipoSang);
 var_dump($fatorRHSang);
 var_dump($depart);


?>