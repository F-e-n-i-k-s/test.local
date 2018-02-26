<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<form method="POST">
		<p><input type = "text" name = "edit_id" placeholder = "id"/></p>
		<p><input type = "text" name = "edit_title" placeholder = "title"/></p>
		<p><input type = "text" name = "edit_name" placeholder = "name"/></p>
		<input name="editBTN" type="submit" value="Редактировать">
</form>

<?php
$con = mysql_connect('localhost','vlad','1234');
mysql_select_db('vlad', $con);
mysql_query("SET NAMES cp-1251");
$query = "SELECT * FROM books";



	if (isset( $_POST['editBTN'] ) && $_POST["edit_title"] != NULL && $_POST["edit_name"] != NULL)
	{
		$result = mysql_query("UPDATE books SET title = '".$_POST["edit_title"]."', name = '".$_POST["edit_name"]."' WHERE id = '".$_POST["edit_id"]."'");
		//$result = mysql_query("UPDATE books SET title = '".$_POST["edit_title"]."', name = '".$_POST["edit_name"]."' WHERE id = '".$_POST["edit_"]."'");
	}

	$result = mysql_query($query);
	echo '<table border="1">';
	echo '<tr><th>id</th><th>title</th><th>name</th></tr>';


	if($result){
		while($row = mysql_fetch_array($result)){
			$title = $row["title"];
			$index = $row["id"];
			$name = $row["name"];
			echo '<tr><th>'.$index.'</th><th>'.$title.'</th><th>'.$name.'</th></tr>';
		}
	}
	?>

	<form action="index.php" method="POST">
			 <input name="viewBTN" type="submit" value="Назад">
	</form>
	</body></html>
