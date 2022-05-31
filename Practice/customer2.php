<?php

$prodName=$_POST['prodName'];
$qty=$_POST['qty'];
$rate=$_POST['rate'];

echo "<br> Customer Name :".$_COOKIE['name'];
echo "<br> Customer Mobiole No :".$_COOKIE['mno'];
echo "<br> Customer Address :".$_COOKIE['addr'];
echo "<br> Product Name :".$prodName;
echo "<br> Product Qantity :".$qty;
echo "<br> Product Rate :".$rate;
?>