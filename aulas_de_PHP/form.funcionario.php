<?php
echo 
"<p>
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
</p><hr>";

?>

<?php
echo "Exercicío para Resolver:<br>";

// Variaveis de entrada //
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$dtNas = $_POST['dtNas'];
$tipoS = $_POST['tipoS'];
$cargo = $_POST['cargo'];
$dpt = $_POST['dpt'];
$sB = (float) $_POST['sB'];
$horaE = $_POST['horaE'];
$horaS = $_POST['horaS'];


// Variaveis do Inss % //
$inss75 = 0.075;
$inss9 = 0.09;
$inss12 = 0.12;
$inss14 = 0.14;

$valInss75 = 1412.00;
$valInss9 = 2666.68;
$valInss12 = 4000.03;
$valInss14 = 4000.04;


/* função "substr" -> trabalha como um extrator de conteudo de vetor
*Exemplo:
* $horaE = "07:54"; -> var. do tipo caracter
* ela e alocada assim -> O nome da variavel "$horaE" e sua posições |0|7|:|5|4|
* cada posição tem em referecial que começa apartir do "0"
*
* Exemplo de posições;
*
* |0|7|:|5|4| <- locação
*  | | | | |
*  0 1 2 3 4 <- número da posição
*
* referencia de como se extrai o conteudo utilizado o Comando "substr"
* $horaEc = substr ($horaE, 0,2);
* $horaEc = <- vai receber o que vai se extrair da variavel "substr" ($horaE)
* ($horaE, 0 ,    2);
*          |      |
*          da     até
*        posição  a posição
*           0        2
*/

$horaEc = substr($horaE, 0,2); // <- para extrair da var $horaE  as horas das posições 0 até 2 //
$minEc = (substr($horaE, 3))/60; // <- Para extrair da var. $horaE os minutos a apartir da posição 3 até o final &  dividir por valores por 60 // 
$horaSc = substr($horaS, 0,2); // <- para extrair da var $horaS  as horas das posições 0 até 2 //
$minSc = (substr($horaS, 3))/60; // <- Para extrair da var. $horaS os minutos a apartir da posição 3 até o final &  dividir por valores por 60 //

$permHe = ($horaSc + $minSc); 
$permHs = ($horaEc + $minEc);

$perm = ($permHe - $permHs) - 1.00;

// echo $perm ,"<br>";


$minTc = (substr($perm,2));
$minTc = "0.$minTc";
$minTc = $minTc*60;

$horaTc = (substr($perm,0,1));
$horaP = $horaTc. ":". $minTc;
echo "<hr>";

echo "Nome do Funcionario: ".$nome."<br>";
echo "Número do RG: ".$rg."<br>";
echo "Número do CPF: ".$cpf."<br>";
echo "Data de NAscimento: ".$dpt."<br>";
echo "Tipo Sanguinio: ".$tipoS."<br>";
echo "Cargo Ocupado: ".$cargo."<br>";
echo "Departamento: ".$dpt."<br>";
echo "Sálario Bruto: ".$sB."<br><br>";

echo "<strong>Banco de horas</strong><br>";
echo "Horário de Entrada: ". $horaE." <br> "; 
echo "Horário de Saída: ". $horaS." <br> ";
echo "Horário Trabalhado: ".$horaP;

// Estrutura Condicional "SE" Composta //

if($sB <= $valInss75){
    $desInss = $sB*$inss75;
}else if($sB <= $valInss9){
    $desInss = $sB*$inss9;
}else if($sB <= $valInss12){
    $desInss = $sB*$inss12;
}else{
    $desInss = $sB*$inss14;
}

echo "<br>","O desconto do INSS é no valor de R$$desInss.00";



?>