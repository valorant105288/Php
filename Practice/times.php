<?php

session_start();

if(isset($_SESSION['cnt'])){
    $cnt=$_SESSION['cnt']+1;
    $_SESSION['cnt']=$cnt;

 echo "welcome Back accesing $cnt";
}

else{
$_SESSION['cnt']=1;
echo "Welcome back";

}

// session_unset();
// session_destroy();

?>