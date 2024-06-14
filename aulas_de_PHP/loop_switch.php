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
