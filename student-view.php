<?php

include ("config.php");


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
	<thead>
    <th>Student ID</th>
    <th>Student Name</th>
    <th>Student Class</th>
    <th>Action</th>
    </thead>

    <tbody>
    <?php
        $sql = "SELECT * FROM student";
        $query = pg_query($db, $sql);

        while($student = pg_fetch_array($query)){
            echo "<tr?>";

            echo "<td>".$student['stdid']."</td>";
            echo "<td>".$student['stdname']."</td>";
            echo "<td>".$student['stdclass']."</td>";

            echo "<td>";
            echo "<a href='delete.php?id=".$student['stdid']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";

        }
            ?>
      
    </tbody>



</table>
<p><a href="index.php">Home</a></p>
</body>
</html>