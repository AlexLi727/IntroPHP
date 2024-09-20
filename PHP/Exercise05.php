<?php
echo "<h3> Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla. </h3>";
$num = random_int(0,20);
$par = 0;
echo "Numero generado: $num <br>";

echo "<h3> Se repita la operación hasta que el total de valores sumados sea superior a 100. Muestra la suma de los valores generados. </h3>";
while($num <= 100){
    if($num % 2 == 0){
        $par++;
    }
    echo "$num ";
    $num = $num + random_int(0, 20);
}
if($num % 2 == 0){
    $par++;
}
echo "$num <br>";

echo "<h3> Muestra el total de números pares e impares generados. </h3>";
echo "Total de números pares: $par";
