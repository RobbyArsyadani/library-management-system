<?php
$db = pg_connect("host=localhost port=5432 dbname=perpustakaan user=postgres password=02062002");
if (isset($_POST['insert']))
{
    
    $query = "INSERT INTO student (stdname,stdClass,librarianid) VALUES ('$_POST[stdname]',
    '$_POST[stdClass]','$_POST[librarianid]')";

$result_insert = pg_query($query); 
    if (!$result_insert)
    {
        echo "Insert failed!!";
    } else {
        echo "Insert successfull;";
    }
}

$result_librarianid = pg_query($db, "select librarianid from librarian");
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

    <form name="insert" action="add-student.php" method="POST">
        <table>
            <tr>
                <th>Student Name</th>
                <td><input type="text" name="stdname"></td>
            </tr>
            <tr>
                <th>Student Class</th>
                <td><input type="number" name="stdClass"></td>
            </tr>
            <tr>
            <th>Librarian ID</th>
            <td><select name="librarianid">
<?php while ($row = pg_fetch_row($result_librarianid)) { ?>
                    <option value="<?php print($row[0]); ?>"><?php print($row[0]); ?></option>
<?php } ?>
                </select>
                </tr>
            </td>
            <tr>
                <td><input type="submit" name="insert" value="Submit"></td>
            </tr>
           
        </table>
    </form>
    <a href="index.php">Home</a>
</body>
</html>