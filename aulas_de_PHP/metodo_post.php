<?php
echo "<p>
        <strong> Dados de Entradas </strong><br>
        Crie um programa que após receber:<br>
        nome:<br>
        matéria:<br>
        notas bimestrais:<br> 
        via form .<hr>
        <strong> Processamento </strong><br>
        Calcule a média e informe o resultado se:<br>
        Média for >= 7  Aprovado / Média for >= 5 Recuperação / Média for < 5 Reprovado.<hr>
        <strong> Dados de Saida </strong><br>
        No final Imprima:<br>
        Nome:<br>
        Matéria:<br>
        Média: e Sitiação.<br>
        </p>"
?>

<?php
$nome = $_POST['nome'];
$materia = $_POST['materia'];
$ntB01 = (float)$_POST['ntB01'];
$ntB02 = (float)$_POST['ntB02'];
$ntB03 = (float)$_POST['ntB03'];
$ntB04 = (float)$_POST['ntB04'];

$media = ($ntB01 + $ntB02 + $ntB03 + $ntB04)/4;

if($media >= 7){
        $situacao = "Aprovado";
}else if($media >= 5){
        $situacao = "Recuperação";
}else if($media >= 3){
        $situacao = "Reprovado";
}else if($media >= 0){
        $situacao = "Notas insulficientes vai estudar seu animal";
}

echo "Boletim Escolar<hr>";
echo "Nome do Aluno(a):".$nome."<br>";
echo "Matéria:".$materia."<br>";
echo "Média do Aluno(a):".$media."<br>";
echo "Situação do Aluno(a):".$situacao;


