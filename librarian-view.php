<?php
try {
	$dbuser = 'postgres';
	$dbpass = '02062002';
	$dbhost = 'localhost';
	$dbname='perpustakaan';
	$connec = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}catch (PDOException $e) 
{
	echo "Error : " . $e->getMessage() . "<br/>";
	die();
}

$sql = "select librarianid,librarianname from librarian";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}
	</style
</head>
<body>
<table>
	<tr>
		<th>Librarian ID</th>
		<th>Librarian Name</th>
		
	</tr>
<?php
foreach ($connec->query($sql) as $row)
{
	?>
	<tr>
		<td> <?php print $row['librarianid'] ?> </td>
		<td> <?php print $row['librarianname'] ?> </td>		
	<?php 
}
?>
</table>
<a href="index.php">Home</a>
</body>
</html>