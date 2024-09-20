<?php
$num = 2;
echo "<h3>  Se declara una variable con un valor numérico. UƟlizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde. 
En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
con ningún día </h3>";
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