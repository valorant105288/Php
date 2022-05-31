<?php
$name=$_POST['name'];
$mno=$_POST['mno'];
$addr=$_POST['addr'];
setcookie("name","$name");
setcookie("mno","$mno");
setcookie("addr","$addr");
?>

<html>
<body>
<form action="customer2.php" method="post"> 
product name: <input type="text" name="prodName"><br>
product Quantity: <input type="text" name="qty"><br>
product rate: <input type="text" name="rate">
<button type="submit">Submit</button>
</form>
</body>
</html>