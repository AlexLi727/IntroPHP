<?php
echo "<h3> Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones. </h3>";
$num1 = 6;
$num2 = 6;
echo "Numero 1: ". $num1. "<br>";
echo "Numero 2: ".$num2. "<br> <br>";

echo "num1 + num2 = ". ($num1+$num2). "<br>";
echo "num2 - num1 = ". ($num2-$num1). "<br>";
echo "num2 * num1 = ". ($num2*$num1). "<br>";
echo "num2 / num1 = ". ($num2/$num1). "<br>";
echo "<br>";

echo "<h3> Muestra cuál es mayor, cuál menor o si son iguales. </h3>";
if($num1 > $num2){
echo "Numero 1 (".$num1.") es mayor que Numero 2 (".$num2.") ";

}else if($num2 > $num1){
echo "Numero 2 (".$num2.") es mayor que Numero 1 (".$num1.") ";

}else{
echo "Los dos números son iguales";
}
echo "<br>";
echo "<h3> Muestra cuál es mayor, cuál menor o si son iguales. </h3>";
if($num1 > 1 && $num2 > 1){
echo "<br> Los dos números son mayores que 1";
echo "<br>Area de triangulo = ". ($num1*$num2/2). "u2";
}