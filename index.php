<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = dbys";
   $credentials = "user = postgres password=02062002";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Library</title>
</head>
<body>
<nav class="navbar navbar-expand">
        <div class="container-fluid">
            <a class="navbar-brand" href="add-student.php">Add data student</a>
            <a class="navbar-brand" href="add-librarian.php">Add librarian data</a>
            <a class="navbar-brand" href="Add-book.php">Add Book</a>
            <a class="navbar-brand" href="student-view.php">View Student</a>
            <a class="navbar-brand" href="librarian-view.php">View Librarian</a>
            <a class="navbar-brand" href="book-view.php">Book View</a>
            
        </div>
</nav>
</body>
</html>