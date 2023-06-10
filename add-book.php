<?php
$db = pg_connect("host=localhost port=5432 dbname=perpustakaan user=postgres password=02062002");
if (isset($_POST['submit']))
{
    echo "masuk if";
    $query = "INSERT INTO books (book_title,author,librarianid,stock) VALUES ('$_POST[book_title]','$_POST[author]','$_POST[librarianid]','$_POST[stock]')";

$result_insert = pg_query($query); 
    if (!$result_insert)
    {
        echo "Insert failed!!";
    } else {
        echo "<script>alert('Insert Success !'); document.location.href= 'add-book.php';</script>";
    }
}

$manage = pg_query($db,"SELECT * FROM librarian");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
<br>

<h1>Add New Book </h1>
<form action = "add-book.php" method= "POST">
  <div class="mb-3">
    <label for="Booktitle" class="form-label">Book Title</label>
    <input type="text" id="Booktitle" name = "book_title">
  </div>
  <div class="mb-3">
    <label for="Author" class="form-label">Author</label>
    <input type="text" id="author" name = "author">
  </div>
  <div class="mb-3">
    <label for="Author" class="form-label">Stock</label>
    <input type="int" id="author" name = "stock">
  </div>
  <div class="mb-3">
    <label for="manage" class="form-label">Managed by</label>
    <select name="librarianid">
    <?php while ($row = pg_fetch_row($manage)) { ?>
    <option value="<?php print($row[0]); ?>"><?php print($row[1]); ?></option>
    <?php } ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>

<a href="index.php">Home</a>
</body>
</html>