<?php

$ID = $row["ID"];
$Name = $row["Name"];
$Price = $row["Price"];
$quantity = $_POST["quantity"]; //$_POST在這不知道可不可行


if(empty ($_COOKIE ["ID_list"]))
{

    setcookie("ID_list", $ID);
    setcookie("Name_list", $Name);
    setcookie("Price_list", $Price);
    setcookie("Quantity_list", $quantity);
}

else
{
    $ID_array = explode (",", $_COOKIE["ID_list"]);
    $Product_array = explode (",", $_COOKIE["Name_list"]);
    $Price_array = explode (",", $_COOKIE["Price_list"]);
    $quantity_array = explode (",", $_COOKIE["Quantity_list"]);

    if(in_array($ID, $ID_array))
    {
        $key = array_search($ID, $ID_array);
        $Quantity_array[$key] += $quantity;
    }


    else
    {
        $ID_array[] = $ID;
        $Name_array[] = $Name;
        $Price_array[] = $Price;
        $Quantity_array[] = $quantity;
    }

    setcookie("$ID_list", implode(",", $ID_array));
    setcookie("$Name_list", implode(",", $Name_array));
    setcookie("$Price_list", implode(",", $Price_array));
    setcookie("$quantity_list", implode(",", $Quantity_array));
}
?>

<html>
    <head>
        <meta charset = "UTF-8">
    </head>
    <body bgcolor = "lightblue">
        <p align = "center"> <img src = "#"></p>
        <p align = "center"> 成功放入購物車!</p>
        <p align = "center"> <a href = "index.html"> 繼續購物 </a> </p>
    </body>   
</html>