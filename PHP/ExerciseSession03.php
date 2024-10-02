<Style>
    tr, td, th{
        border: 1px solid black;
    }
    table{
        border-collapse: collapse;
    }
</Style>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Shopping list</h1>
    <form method = post>
    name: <input type = text name = name value = "<?php 
    if(isset($_POST["Edit"])){
        echo $_POST["Edit"];
        $product = $_POST["Edit"];
    }
    ?>"> <br>
    quantity <input type = number name = quantity min = 0 required value = "<?php 
    if(isset($_POST["Edit"])){
        echo $_SESSION[$product][0];
    }
    ?>"> <br>
    price: <input type = number name = price min = 0 required value = "<?php 
    if(isset($_POST["Edit"])){
        echo $_SESSION[$product][1];
    }
    ?>"> <br>
    <input type = submit value = Add>
    <input type = submit value = Update>
    <input type = reset value = Reset>
    </form>
    <table>
        <tr>
            <th> name </th>
            <th> quantity </th>
            <th> price </th>
            <th> cost </th>
            <th> actions </th>
        </tr>
</body>
</html>

<?php
$total = 0;
if(isset($_POST["Delete"])){
    unset($_SESSION[$_POST["Delete"]]);
}

if(isset($_POST["name"]) && isset($_POST["quantity"]) && isset($_POST["price"])){
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $price = $_POST["price"];
    $_SESSION[$name] = array($quantity, $price);
}

foreach(array_keys($_SESSION) as $name){
    $precio = $_SESSION[$name][0] * $_SESSION[$name][1];
    echo "
    <tr>
    <td>".$name."</td>
    <td>".$_SESSION[$name][0]."</td>
    <td>".$_SESSION[$name][1]."</td>
    <td>".$precio."</td>
    <td> 
    <form method = POST> 
    <button name = Edit value = $name type = submit> Edit </button> 
    <button name = Delete value = $name type = submit> Delete </button>
    </form> 
    </td>
    </tr>
    ";
}

echo "
<tr>
<td> </td>
<td> </td>
<td> Total: </td>";
if(isset($_POST["Calculate"])){
    $total = 0;
    foreach(array_keys($_SESSION) as $name){
        $precio = $_SESSION[$name][0] * $_SESSION[$name][1];
        $total += $precio;
    }
}
echo "<td> $total </td>";
echo "<td> <form method = POST> <button name = Calculate type = submit> Calculate Total </button> </form> </td>
</tr>
";
echo "</table>";