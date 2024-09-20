<?php
echo "<h3> Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado. </h3>";
$dado = random_int(1,6);
echo "Valor obtenido: $dado";

echo "<h3> Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara opuesta. </h3>";
echo "($dado:";
switch ($dado){
    case 1:
        echo "5) uno";
        break;
    case 2:
        echo "6) dos";
        break;
    case 3:
        echo "4) tres";
        break;
    case 4:
        echo "3) cuatro";
        break;
    case 5:
        echo "1) cinco";
        break;
    case 6: 
        echo "2) seis";
        break;
}
