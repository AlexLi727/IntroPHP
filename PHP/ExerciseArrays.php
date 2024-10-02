<?php
echo "<h2> Ejercicio 1 </h2>";
$num = 1;
$dato["nombre"] = "Sara";
$dato["apellido"] = "Martinez";
$dato["edad"] = 23;
$dato["ciudad"] = "Barcelona";
foreach($dato as $value){
    echo "dato $num: $value <br>";
    $num++;
}
echo "<br>";
echo "<h2> Ejercicio 2 </h2>";
foreach($dato as $value => $valor){
    echo "$value: $valor <br>";
}
echo "<br>";
echo "<h2> Ejercicio 3 </h2>";
$dato["edad"]++;
$num = 1;
foreach($dato as $value){
    echo "dato $num: $value <br>";
    $num++;
}

echo "<br>";
echo "<h2> Ejercicio 4 </h2>";
unset($dato["ciudad"]);
echo var_dump($dato);

echo "<br>";
echo "<h2> Ejercicio 5 </h2>";
$letters = "a, b, c, d, e, f";
$letters = explode(",", $letters);
$num = count($letters);
foreach(array_reverse($letters) as $letras){
    echo "Letter $num: $letras <br>";
    $num--;
}

echo "<br>";
echo "<h2> Ejercicio 6 </h2>";
$nota["Miguel"] = 5;
$nota["Luis"] = 7;
$nota["Marta"] = 10;
$nota["Isabel"] = 8;
$nota["Aitor"] = 4;
$nota["Pepe"] = 1;
asort($nota);
echo "Notas de los estudiantes: ";
foreach(array_reverse($nota) as $antonio => $nombre){
    echo "$antonio: $nombre ";
}

echo "<br>";
echo "<h2> Ejercicio 7 </h2>";
$media = array_sum($nota)/count($nota);
echo "Media de las notas: ". round($media, 2);
echo "<br> Alumnos con nota por encima de la media: <br>";
foreach($nota as $alumno => $num){
    if($num > $media){
        echo $alumno. "<br>";
    }
}

$mejorNota = 0;
foreach($nota as $alumno => $num){
    if($num > $mejorNota){
        $mejorNota = $num;
        $mejorAlumno = $alumno;
    }
}

echo "<h2> Ejercicio 8 </h2>";
echo "<br> La nota más alta es $mejorNota y el mejor alumno es $mejorAlumno";