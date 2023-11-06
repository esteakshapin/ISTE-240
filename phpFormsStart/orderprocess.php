<?php
$path = "./";
$page = "Order Receipt";
include($path ."assets/inc/header.php");
?>

<h2>Your Pizza Order</h2>

<?php

$cName = $_POST['customerName'];
$cID = $_POST['customerID'];
$pSize = $_POST['pizzaSize'];
$toppings = $_POST['toppings'];

if (empty($cID)){
    header('Location: orderform.php?name='. $cName);
}else{
    if (!is_numeric($cID)){
        echo '<p> Customer ID ' .$cName . 
        'is not a valid ID because it contains (a) non numeric character(s). <p>';

        echo '<p><form action="orderform.php"> <input type="hidden" name="name" value="'.$cName.'"/><input type="submit" value"ok"/></form></p>';
    }else{
        switch ($pSize){
            case 'p':
                $pizzaCost = 7.99;
                $pizzaType = "Personal";
                break;
            case 'S':
                $pizzaCost = 10.99;
                $pizzaType = "small";
                break;
            case 'M':
                $pizzaCost = 13.99;
                $pizzaType = "medium";
                break;
            case 'L':
                $pizzaCost = 16.99;
                $pizzaType = "Large";
                break;
            default:
                $pizzaCost = 13.99;
                $pizzaType = "Medium";
                break;
        }

        $taxAmount = ($pizzaCost + (int)$toppings) * .08;
        $totalCost = $pizzaCost + (int)$toppings + $taxAmount;

        $fmt = numfmt_create("en_US", NumberFormatter::CURRENCY);
    }
}

?>

<div id="receipt">
    <br /> Your Delicious Pizza Order!!
    <br />
    <br /> Pizza Price:

    <?php 
        echo numfmt_format_currency($fmt, $pizzaCost, "USD");
        echo "<br /> Topping Price: $". $toppings .".00";
        echo "<br /> Total Tax: " . numfmt_format_currency($fmt, $taxAmount, "USD");
        echo "<br /> Total Cost of your order is: " . numfmt_format_currency($fmt, $totalCost, "USD");
        echo "<br /> <br /> Thank you for your order";
        echo ($cName == '') ? '.' : ", $cName.";
    ?>

</div>

<?php 
	include($path ."assets/inc/footer.php");
?>