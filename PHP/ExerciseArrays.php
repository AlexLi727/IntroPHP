<?php
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

foreach($dato as $value => $valor){
    echo "$value: $valor <br>";
}
echo "<br>";

$dato["edad"]++;
$num = 1;
foreach($dato as $value){
    echo "dato $num: $value <br>";
    $num++;
}

echo "<br>";
unset($dato["ciudad"]);
echo var_dump($dato);

echo "<br>";
$letters = "a, b, c, d, e, f";
$letters = explode(",", $letters);
$num = count($letters);
foreach(array_reverse($letters) as $letras){
    echo "Letter $num: $letras <br>";
    $num--;
}

echo "<br>";
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

echo "<br> La nota más alta es $mejorNota y el mejor alumno es $mejorAlumno";