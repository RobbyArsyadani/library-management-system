<?php

include "config.php";

$update = ($_GET["id"]);
$data = pg_query($db, "SELECT * FROM books where id = '$update'");

if (isset($_POST['update']))
{
    $query = ("UPDATE books SET
                stock = '$_POST[stock]'
                WHERE id = '$update'");

$result_update = pg_query($query); 
    if (!$result_update)
    {
        echo "Update failed!!";
    } else {
        echo "  <script>alert('Update Success !');
                document.location.href= 'book-view.php';
                </script>";
    }
}

$result_query = pg_query($db,"SELECT * FROM books");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form name = "update" action = "" method = "POST">
       <table>
           <tr>
               <th>Book Title</th>
               <td>
           <select type = "integer" name="book_title">                  
                    <?php while ($row = pg_fetch_row($result_query)) { ?>
                        <option value="<?php print($row[0]); ?>"><?php print($row[1]); ?></option>
                    <?php } ?>>
                    </td>
           </tr>
           <tr>
               <th>Update Stock</th>
               <td><input type = "integer" name = "stock"></td>
           </tr>
           <tr>
               <td><button type = "submit" name = "update">Submit</td>
           </tr>
       </table>
</form>


</body>
</html>