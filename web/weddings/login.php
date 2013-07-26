<?php

mysql_connect('localhost', 'root', 'root');
mysql_select_db('weddings') or die("Unable to find database."); 

if ($_POST['username'] != "")
{

$username= $_POST['username'];
$password= SHA1 ($_POST ['password']);


$userQuery =mysql_query("SELECT * FROM Users WHERE username = '$username' AND password = '$password'");

$Counter = mysql_num_rows($userQuery);
  


?>


<html>

<head>
<title>Login</title>
</head>
<body>


<h1>Login</h1>

<form action="#" method="post" >
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="submit">
</form>



</body>
</html>



