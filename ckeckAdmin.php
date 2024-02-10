<?php
session_start();
$admin=array("arwa","Mohammed","Ahmed","Amani");
if($_SERVER['REQUEST_METHOD']=='POST')
{$user=$_POST['userName'];
if(in_array($user,$admin))
{$_SESSION['user']=$user;
echo "welcome " . $_SESSION['user'] ." you redirected to admin page 😎";
header('REFRESH:3;URL=control.php');}
else{echo "you are not admin 🤦‍♂️";}}
else{echo "you can not browse this page directly 😢";}