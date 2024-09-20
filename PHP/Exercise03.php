<?php 
$num1 = 24;
$num2 = 56;
$hola = $num2;
echo "<h3> Se declaren dos variables con valores numéricos superiores a 10. </h3>";
echo "Variable 1 = $num1 <br>";
echo "Variable 2 = $num2";

echo "<h3> Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for. </h3>";
for($i = 0; $i < $num1+1; $i++){
    if($i % 2 == 0){
        echo "$i ";
    }
}

echo "<br>";
echo "<h3> Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while.</h3>";
while($hola >= 0){
        echo "$hola ";  
$hola--;
}

echo "<br>";
echo "<h3> Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while. </h3>";
do{
echo "$num1 ";
$num1++;
}while($num1 <= $num2);
