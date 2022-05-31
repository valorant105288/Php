

<?php // set the cookie 
setcookie ("username", "aaa", time()+30); ?>

<html>
    <body>
<?php // check if the cookie exists 
if(isset($_COOKIE["username"])) {
echo "Cookie set with value: ".$_COOKIE["username"];
} else {
echo "cookie not set!"; }
?>
</body>
</html>
