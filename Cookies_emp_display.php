<?php
echo"Eno:101<br>";
echo"Ename:Pranit<br>";
echo"Address:Pune";
echo  "<br>Basic:".$_GET['basic']."<br>DRA:".$_GET['dra']."<br>HRA:".$_GET['hra'];

#setcookie("Set1",$_GET['eno']);
#setcookie("Set2",$_GET['ename']);
#setcookie("Set3",$_GET['addr']);
setcookie("Set4",$_GET['basic']);
setcookie("Set5",$_GET['dra']);
setcookie("Set6",$_GET['hra']);

?>
