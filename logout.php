<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = php_login.php');
?>
<!DOCTYPE HTML> 
<html>
<head>
<style>
@font-face {
font-family: jeopardy;
src: url(./gyparody/gyparody.ttf);
}

body {
padding-top: 40px;
padding-bottom: 40px;
background-color: #060CE9;
}

font-family: jeopardy;
text-align: center;
color: #c0c0c0;
font-size: 200px;
margin-top: 15px;

</style>
</head>
<body>
<h1>Thanks for Playing!</h1>