<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição</title>
</head>
<body>
    <h2>PARA</h2>
    <?php
        for($i=0;$i<11;$i++){
            echo $i."<br>";
        }
        echo "após o loop o valor de i é $i.";
    ?>
    <hr>
    <h2>ENQUANTO</h2>
    <?php
        $m = 0;
        while($m < 11){
            echo $m."<br>";
            $m++;
        }
        echo "após o loop o valor de m é $m.";
    ?>
    <hr>
    <h2>REPITA</h2>
    <?php
        $z = 0;
        do{
            echo $z."<br>";
            $z++;
        }while($z < 11);
        echo "após o loop o valor de z é $z.";
    ?>
    <hr>
    <?php
// jogue o Dado
//=============//

//estrutu caso //
$dado = rand(0,6);// -> Valor Randominco de 0 até 6
echo $dado." ";// -> para ver o valor do dado

// switch -> significa = escolha caso //
switch($dado){
    case 1:
        echo "Avance 1 casa";
        break;// Sair da Lista
    case 2:
    case 3:
    case 4:
        echo "Jogue denovo";
        break;
    case 5:
        echo "Você perdeu a sua vez";
        break;
    case 6:
        echo "Bonus voê pode avançar 3 casas";
        break;
    default:// -> equivale a posição "0"
        echo "Jogue novamente";
        break;
}


?>
</body>
</html>