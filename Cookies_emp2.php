<?php
echo "ENO:".$_GET['eno']."<br>Name:".$_GET['ename']."<br>Address:".$_GET['addr'];
setcookie("Set1",$_GET['eno']);
setcookie("Set2",$_GET['ename']);
setcookie("Set3",$_GET['addr']);
echo'<html>
<body>
	<form action = "Cookies_emp_display.php">
    Enter Emp BASIC:<input type = "text" name = "basic">
    Enter Emp DRA:<input type = "text" name = "dra">
    Enter Emp HRA:<input type = "text" name = "hra">
    <input type = "submit" name= "submit">

</form>
</body>
</html>';

?>
