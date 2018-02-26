<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>

	<form method="POST">
			<input name="deleteBTN" type="submit" value="Удалить">

<?php
$con = mysql_connect('localhost','vlad','1234');
mysql_select_db('vlad', $con);
mysql_query("SET NAMES cp-1251");

if(isset($_POST['itembag']))
{
	//echo $_POST['itembag'];
	$query = 'DELETE FROM books WHERE id ='.$_POST['itembag'];
	$result = mysql_query($query);
}

$query = "SELECT * FROM books";

$result = mysql_query($query);


echo '<p><select size="10" name="itembag">';

if($result){
		while($row = mysql_fetch_array($result)){
			$title = $row["title"];
			$index = $row["id"];
			echo '<option value="'.$index.'">'.$title.'</option>';
		}
	}
	echo '</select></p>';

	?>
</form>
	<form action="index.php" method="POST">
	     <input name="viewBTN" type="submit" value="Назад">
	</form>
