<?php
session_start();
if(!isset($_SESSION["numbers"])){
    $_SESSION["numbers"] = array(10, 20, 30);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Modify array saved in session </h1>
    <form method = POST>
        Postion to modify: 
    <select name = position>
        <option value = 0> 0 </option>
        <option value = 1> 1 </option>
        <option value = 2> 2 </option>
    </select>
    <br> <br>
    New value:
    <input type = number name = value>
    <br> <br>
    <input type = submit value = Modify name = option>
    <input type = submit value = Average name = option>
    <input type = reset value = Reset>
    </form>
    <br>
</body>
</html>

<?php
if(isset($_POST["option"])){
    $option = $_POST["option"];
    $position = $_POST["position"];
    $newValue = $_POST["value"];
    if($option == "Modify"){
        $_SESSION["numbers"][$position] = $newValue;
    }elseif($option == "Average"){
        echo "<br> Average : ";
        echo array_sum(($_SESSION["numbers"]))/count(($_SESSION["numbers"]));
        echo "<br>";
    }  
}
echo "Current array: ";
foreach($_SESSION["numbers"] as $number){
echo "$number, ";
}
    
?>