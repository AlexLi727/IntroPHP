<?php
$num = 2;
echo "Valor numérico: ". $num. "<br>";
switch($num){
    case 1: echo "El valor corresponde al Lunes"; break;
    case 2: echo "El valor corresponde al Martes"; break;
    case 3: echo "El valor corresponde al Miércoles"; break;
    case 4: echo "El valor corresponde al Jueves"; break;
    case 5: echo "El valor corresponde al Viernes"; break;
    case 6: echo "El valor corresponde al Sábado"; break;
    case 7: echo "El valor corresponde al Domingo"; break;
    default: echo "El valor no corresponde a ningún dia de la semana"; break;
}