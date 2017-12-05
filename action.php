<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'password';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   mysql_select_db('user-db');
   
if(isset($_POST["em"])&&isset($_POST["pass"])){

// login

$em=mysql_real_escape_string($_POST["em"]);
$pass=mysql_real_escape_string($_POST["pass"]);

$val = mysql_query("SELECT name,email FROM users where password=".$pass."");

 while($row = mysql_fetch_array($val, MYSQL_ASSOC)) {
      if($u["email"]==$em){
        session_start();
        $_SESSION["user"] == $u["name"];
        header("location:home.php");
        break;
      }
   }
   
}elseif(isset($_POST["fname"])&&isset($_POST["fname"])&&isset($_POST["email"])&&isset($_POST["password"])){

$fname = mysql_real_escape_string($_POST["fname"]);
$lname = mysql_real_escape_string($_POST[lname"]);
$email = mysql_real_escape_string($_POST["email"]);
$password = mysql_real_escape_string($_POST["password"]);
$name = $fname." ".$lname;
$act = mysql_query('INSERT INTO users(name,email, password) VALUES ( $name, $email, $password));
if(!$act){

}else{
session_start();
$_SESSION["user"] = $name;
header("location:home.php");
}

}
