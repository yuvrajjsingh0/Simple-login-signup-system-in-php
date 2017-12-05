<?php

if(isset($_SESSION["user"])){
header("location:home.php");
}else{
header("location:login.php");
}

?>
