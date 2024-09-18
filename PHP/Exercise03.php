<?php 
$num1 = 24;
$num2 = 7;
$hola = 0;
for($i = 0; $i < $num1+1; $i++){
    if($i % 2 == 0){
        echo "$i ";
    }
}

echo "<br>";
while($num2+1 != $hola){
    if($hola % 2 == 0){
        echo "$hola ";
    }
$hola++;
}

echo "<br>";
do{
echo "$num1 ";
$num1++;
}while($num1+1 < $num2 || $num1+1 == $num2);
