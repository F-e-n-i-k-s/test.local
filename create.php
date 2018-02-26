<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
		<form method="POST">
				<p><input type = "text" name = "add_title" placeholder = "title"/></p>
				<p><input type = "text" name = "add_name" placeholder = "name"/></p>
				<input name="addBTN" type="submit" value="Добавить">
		</form>

﻿<?php
$con = mysql_connect('localhost','vlad','1234');
mysql_select_db('vlad', $con);
mysql_query("SET NAMES cp-1251");

if (isset( $_POST['addBTN'] ) && $_POST["add_title"] != NULL && $_POST["add_name"] != NULL)
{
	$result =  mysql_query("INSERT INTO `vlad`.`books` (`id`, `title`, `name`) VALUES (NULL, '".$_POST["add_title"]."', '".$_POST["add_name"]."')" );
}

	?>
	<form action="index.php" method="POST">
	     <input name="viewBTN" type="submit" value="Назад">
	</form>
	</body></html>
