<?php
$db = pg_connect("host=localhost port=5432 dbname=perpustakaan user=postgres password=02062002");
if (isset($_POST['insert']))
{
    
    $query = "INSERT INTO librarian (librarianName) VALUES ('$_POST[librarianname]')";

$result_insert = pg_query($query); 
    if (!$result_insert)
    {
        echo "Insert failed!!";
    } else {
        echo "Insert successfull;";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student data</title>
    <style>
        table {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Insert the student data</h1>

    <form name="insert" action="add-librarian.php" method="POST">
        <table>
            <tr>
                <th>Librarian Name</th>
                <td><input type="text" name="librarianname"></td>
            </tr>
                <td><input type="submit" name="insert" value="Submit"></td>
            </tr>
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>