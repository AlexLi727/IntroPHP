<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Supermarket management</h1>
    <form method = POST>
        Worker name: <input type = name name = name>

        <h2> Choose product</h2>
        <select name = drink>
            <option value = soda> Soft Drink </option>
            <option value = milk> Milk</option>
        </select>

        <h2>Choose quantity</h2>
        <input type = number name = quantity>
        <br><br>
        <input type = submit value = add name = add> 
        <input type = submit value = remove name = remove>
        <input type = reset value = reset>
    </form>
</body>
</html>

<?php
if(isset($_POST["name"]) && isset($_POST["quantity"])){
    $name = $_POST["name"];
    $drink = $_POST["drink"];
    $quantity = $_POST["quantity"];
    
    if(trim($name) != ""){
    echo "<h2> Inventory: </h2>";
    session_start();
    if(isset($_SESSION[$name])){

    }else{
        $_SESSION[$name]["milk"] = 0;
        $_SESSION[$name]["soda"] = 0;
    }
    if(isset($_POST["add"])){
        $_SESSION[$name][$drink] += $quantity;
    }else{
        $_SESSION[$name][$drink] -= $quantity;
    }
    
    echo "worker: $name <br>";
    echo "units milk: ". $_SESSION[$name]["milk"] ."<br>";
    echo "units soft drink: ". $_SESSION[$name]["soda"];
}
}
?>