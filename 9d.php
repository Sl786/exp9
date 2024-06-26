<html>
<head> <title> User Acess </title> </head>
<body bgcolor="bisque"> <br>
<center>
<?php
$firstname = 'aaa';
$middlename = 'bbb';
$lastname = 'ccc'; setcookie('first_name',$firstname,time() + 86400);
setcookie('middle_name',$middlename,time() + 86400);
setcookie('last_name',$lastname,time() + 86400); print "cookies set";
?>
</center>
</body>
</html>

Listcookie.php
<html> 
<head> <title> Cookie </title> </head> 
<body bgcolor="GreenYellow"> 
<center> 
<form action="" method="post"> 
 <input type="submit" value="LIST COOKIES" name="list"> 
</form> 
</center> 
<?php 
error_reporting(0); 
if($_POST['list']) 
{ 
foreach($_COOKIE as $key=>$val) 
{ 
echo "<center>".$key." is ".$val."<br> 
</center>"; 
} 
} 
?>
</body> 
</html>
